<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformTermCheckboxes.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformTermReferenceTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformEntityReferenceTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformEntityOptionsTrait.php-1594690523',
   'data' => 
  array (
    'f33097bba4cd2d45d443aa5c7f534627' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a \'webform_term_checkboxes\' element.
 *
 * @WebformElement(
 *   id = "webform_term_checkboxes",
 *   label = @Translation("Term checkboxes"),
 *   description = @Translation("Provides a form element to select a single or multiple terms displayed as hierarchical tree or as breadcrumbs using checkboxes."),
 *   category = @Translation("Entity reference elements"),
 *   dependencies = {
 *     "taxonomy",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'termcheckboxeselement' => 'Drupal\\webform\\Element\\WebformTermCheckboxes',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c006d960251aeb5b8d54ad9921f2e8af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an \'term_reference\' trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd5a04e48e7f447cc4626f1cf3b7bf70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an \'entity_reference\' trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eff94c01c42d5cc5afb09952c4fcd409' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1eee6cfac95dbdf1900fd92eccc32261' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7dd99e265d7c17a341f2930420bc226' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be1bd9b9b8289a2596f0c74663fa4163' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b71156d092fa6279a5e2a0d9eccd1f0d' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c26018e049ce6504be58100d93cfb42' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f8c6a87623dc41047d7b432cfd3805d' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff37ffd49cab1fc24bff8797ef5eabc1' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2192acc2a9d285b6863d65e7f5818d9' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3882de1afa2fe47216ebf70308f09c6' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3eb2692e451dc26f07cdbc9dce963e37' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fae172175c71ec0150199d3a6c55c7b' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4871d8ff55302d70ca0dd078f8a916ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e81ead133dcf27d14fa8d29ca172be6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35bb055be736788a57a098cbc6c03510' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The selection plugin manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d28d24bffee5ee9bf461050709d3458' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1731812b089403c889bf551edaf6fe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getRelatedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd270019bd9173600025570b8b19f4590' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a04033955790bd7ee2d134c1af5ecc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '800a421b4e214c07e10c32bbfe38e94c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75a331d090ce65263e972a667cca3d83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\taxonomy\\TermStorageInterface $taxonomy_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84f601e79c63fe8fe7e4a144a3b969bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getTestValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74f077ac6373af1c66d584f03a0f905e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'isMultiline',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c38e61edcad4a2e84ff22b2f3b3a12a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getItemDefaultFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c48a4d7a4d9241bc0d6418530ea436dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getItemFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86d78d59e26858f8f7c1efb55d14153c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '011901c0bc9e9f439861b53edae35351' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getExportDefaultOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f45c243052dc36837b685959ec6681e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildExportOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ddcde2fa4c2ef17ddda2858f25cbb50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback. Remove unchecked options from value array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'validateEntityReferenceFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91e603f5dc848ba1eb9e2d30b019575f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildExportHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0be30902cf5bd117d0c62412536b45f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildExportRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb1bb02cef1321209f7d82424178d276' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get element options.
   *
   * @param array $element
   *   An element.
   * @param array $settings
   *   An array of settings used to limit and randomize options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '710dfda95f05152b5e2e503a3dd3adac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getTargetType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a57c5b5f50dc61c9e0da9b382a4ac9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getTargetEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c9671019a34c458bb72e98a73cbb2a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getTargetEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08d2dd32937b7a8625ec8ec9c2884425' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d426044a735547dea9d3b822bb188c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f40eb416965e45e1910f01c40735a47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an ajax elements trigger.
   *
   * @param string $id
   *   The id used to create the ajax wrapper and trigger.
   * @param array &$element
   *   The elements to trigger the Ajax update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'urlgenerator' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformentitytrait' => 'Drupal\\webform\\Element\\WebformEntityTrait',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'buildAjaxElementTriggerRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64e66ec44610b1ba8e759b04ab7665a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an \'entity_reference\' with options trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01d4ea139f3d4b0e181c2a665fb9c7b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c9f0a13c17f6e1ef143f12f4ae3b5b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b77c72318bb98a6cf47dafe59949e79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getElementSelectorInputsOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78af031dff756159dea7301042a758aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getElementSelectorSourceValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b70eaf954a70c70140aa0d7f05a3d789' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getRelatedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f341a2e41f93127c77b112c847440291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1acd62d11ae90bb553890622498dbfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\taxonomy\\TermStorageInterface $taxonomy_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba071ea46c4cf2027b1a177cb448da32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf51819f1a08fc8239694a569511ebf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c7c355d4d7215db1ac0eacb8d5e0a48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getTargetType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '200a7505526fd6cdaeadf5a2bd68d118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'termcheckboxeselement' => 'Drupal\\webform\\Element\\WebformTermCheckboxes',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3da3b88fe85bd5fd42a2197a0779490c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'termcheckboxeselement' => 'Drupal\\webform\\Element\\WebformTermCheckboxes',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'getElementSelectorInputsOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5f28ccdaebea99acdc50359a9de5882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'termcheckboxeselement' => 'Drupal\\webform\\Element\\WebformTermCheckboxes',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTermCheckboxes',
         'functionName' => 'setOptions',
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