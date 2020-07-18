<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/EntityAutocomplete.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformEntityReferenceTrait.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402',
   'data' => 
  array (
    'b066a7848647532d7a9f97f2d8e9c9ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a \'entity_autocomplete\' element.
 *
 * @WebformElement(
 *   id = "entity_autocomplete",
 *   api = "https://api.drupal.org/api/drupal/core!lib!Drupal!Core!Entity!Element!EntityAutocomplete.php/class/EntityAutocomplete",
 *   label = @Translation("Entity autocomplete"),
 *   description = @Translation("Provides a form element to select an entity reference using an autocompletion."),
 *   category = @Translation("Entity reference elements"),
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '786f1823b0727fe8c3fda7477e5596b0' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1dd1023dd200e6f42199d45fde3e28a' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70f75a779af168d0a483beb7e51bc5da' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '778582906bec36f83eafb3e27123ff6f' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65645cc08ccdc94a19707348f7dae7c7' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '332a13e9f1b02b3ceaa10ccb80830cb8' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e77ed19781e1be4b670bdc10cae3986' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa025c883b3db1277c6f03840cfdc9cc' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e569b405462f2c3928389ca90d7a74c7' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b637a90132fbc6dc1d591ffdddcf9190' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a537623b14bcc8e269c398e20c8b42ef' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab0e5d1283e83484c96fe947dcf6b0b6' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5018c53623851bc9550a411926af848c' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c59dc30c22aaaf64d395b276f2b10649' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2b3a65de1f3497232f848cf977df330' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d4c0caa6e941ac0be5411c86a7510d4' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7aac4827cdcfe8427e8e27fbd407463' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ec14bf921b936cbb5fef6a8d4e3886c' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getRelatedTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2de426bca9b04526dda4e0cbcf4f5c3d' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b40dd69ad73fb0d4ab10c3a88ce80d53' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35402d67afbd6fd59fe3a066b7b11724' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8780bb165d3c72e4f9745c3a5229ba9e' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f40554e467a655d9639e0320e1d04fa' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getTestValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48f8d733e06707906fe888d36650f700' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'isMultiline',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ab0df966d0b7571150c7d9b5ef42f78' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getItemDefaultFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8647c3bb54a77054fcfa21e2616fbb1b' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getItemFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52d87fcf8295cd7a2021187b86327752' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35447737959e2f3c04b2e271703ad11f' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getExportDefaultOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2818cb2bc7ba741273d6e36e15f1e71' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildExportOptionsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd3aba5948512065056da2123ecb52af' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'validateEntityReferenceFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd35abb0730a8749f76a4ce903fdd82fa' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildExportHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f52293ddbeced0698728f1b359ff7b9b' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildExportRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4559ec38928e61b6a691329c9396ab82' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02f19d8dbe4438f042dd63e68c363ac5' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getTargetType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0e74625d191402ebcba1dd467544a71' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getTargetEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9be048dbe22674211cbed6dc658f034e' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getTargetEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb93c3f1257ca510aede84e65e086a03' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a29cd124e568e852f9aaff539f883cd5' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e14cfb463cf5e22a4cfc94229d59644b' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'buildAjaxElementTriggerRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3a27153f5c581fbe1054db5b54f4967' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49867dc4ae72961b98ee0b00ba224071' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'setDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '345c8c56a0d34b3671dec83c6b1bdaec' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'supportsMultipleValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7142a4b3f0a186be51bca10efb175c64' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'hasMultipleWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c760ec22fa87b3b46bffd4ed654c1795' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'hasMultipleValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '529dacd0cad13af777bd2c36850340f6' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '868819c19d6a8dae03cd114c5fc44600' => 
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
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'prepareElementValidateCallbacks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8753af8e93ec57117633b90ef42bff95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form API callback. Remove target id property and create an array of entity ids.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'validateEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c625fbdd09efe080eefd093c28d261e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'validateEntityAutocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e75b5d2986afd70c234ea0b7c2a63830' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the entity id from the submitted and processed #value.
   *
   * @param array|string $item
   *   The entity item.
   *
   * @return string
   *   The entity id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\EntityAutocomplete',
         'functionName' => 'getEntityIdFromItem',
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