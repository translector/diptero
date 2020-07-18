<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_custom/src/Plugin/WebformElement/WebformOptionsCustomEntity.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformEntityReferenceTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformEntityOptionsTrait.php-1594690523',
   'data' => 
  array (
    '3f4c243e1ab2000a56dc62c85db65b90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a custom options entity reference element.
 *
 * @WebformElement(
 *   id = "webform_options_custom_entity",
 *   label = @Translation("Custom entity reference"),
 *   description = @Translation("Provides a form element for creating custom options using HTML and SVG markup with entity references."),
 *   category = @Translation("Custom elements"),
 *   deriver = "Drupal\\webform_options_custom\\Plugin\\Derivative\\WebformOptionsCustomEntityDeriver"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformentityreferencetrait' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformEntityReferenceTrait',
          'webformentityoptionstrait' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformEntityOptionsTrait',
        ),
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd92b2868a97f42dceca07c37818d5710' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a2bfb9a218666ac8de4ca3ad63100d5' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e40e0b0473c28824a74001488ed581e8' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ee485a45f7074091989d78683d5bdf2' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa7fae0c4a70aa1a239aec98f0625950' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f82213c4498472ed35b9d54bb625852b' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fd16937d13be89a4984395680a5b131' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e6883be41f4904c67fe2715173d67e9' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8eb7f4b2545748df333ec204f092800' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6f30b73f1c709f44166281fd4809a93' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '968933b52b8ce909cd173a06e8c49717' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b52ac6b3929aaf29100a5361975540f8' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef5ea436bd857553c908a095837b0028' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca98091057e0a97fc47cb0c4ad925ecf' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1c93f61ab0fbde9ac129db6a9c67430' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c610722c534d08d2ef83beda9649b1f' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b730e3cc2da3d30f478a8c5dde0b59c' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9be4d41cf843596ad65dc99df8b7e923' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getRelatedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a016def8a8996afc3aca9511da2617f3' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '631f6aab5d73588c05da2bbbcdb943fd' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c667e1480eee0579b281702c5852825b' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29d02f0dde29ed8af01ffeb8b5da1c1e' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99af10fcdfc6d0219da334d4237da6e9' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getTestValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '682824bb8a3b9d710783e134c6f6da3f' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'isMultiline',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1a6d7d7d7118a6944465c420d74f63c' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getItemDefaultFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6f2dc8ba3f0ac1a345c99c0cdd0a6d2' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getItemFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57ef38e8b1f7be17afad2b1866dd7557' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '663f9376f3203cb065567bd85478da15' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getExportDefaultOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '315bb68e65fa6249da2b8a411321acd2' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildExportOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12b769c1d32798e3063a0c641611410c' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'validateEntityReferenceFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60a2aa21465f1f7bb979299d0672cc20' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildExportHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '984830af8074e8319451d3ce0b0a3be3' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildExportRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bb8e5d06b341c63ebe774cd98b950ed' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '818688ab8905514596863b933c8b0e63' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getTargetType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7fa3e9bdbcc79deeda2debd732cebae9' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getTargetEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2c5d69585b9e912a829b06baac81e08' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getTargetEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9de637f3bc3c7b2d5397095e658e8685' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e424181cfed7a80f0b597f46735c4913' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce3989ee27b1f48ed3df6d6b5406fdb8' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'buildAjaxElementTriggerRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69431ff06d2bd9c11176cd4ed59d9ece' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecd0e024b6792fbfd7272f337792cfcf' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4bbfdf6b7c637a8e52f41c71455442b' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8134c38ded34b3ba24c921d77ebe670b' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getElementSelectorInputsOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '572bef0e87326812beb2bf22d3981e8b' => 
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
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'getElementSelectorSourceValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46a130ea720cc6315fe85416d299009f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformentityreferencetrait' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformEntityReferenceTrait',
          'webformentityoptionstrait' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformEntityOptionsTrait',
        ),
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6b9824ce4ea04d66f6cf3a239e71864' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_options_custom\\Element\\WebformOptionsCustomInterface $class */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelemententityoptionsinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityOptionsInterface',
          'webformentityreferencetrait' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformEntityReferenceTrait',
          'webformentityoptionstrait' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformEntityOptionsTrait',
        ),
         'className' => 'Drupal\\webform_options_custom\\Plugin\\WebformElement\\WebformOptionsCustomEntity',
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