<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformHandler/EmailWebformHandler.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformAjaxElementTrait.php-1594241402',
   'data' => 
  array (
    '83364e4316adabd392c6adda12e62337' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Emails a webform submission.
 *
 * @WebformHandler(
 *   id = "email",
 *   label = @Translation("Email"),
 *   category = @Translation("Notification"),
 *   description = @Translation("Sends a webform submission via an email."),
 *   cardinality = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \\Drupal\\webform\\Plugin\\WebformHandlerInterface::SUBMISSION_OPTIONAL,
 *   tokens = TRUE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22869c14e3d12b5b9e7fa6b1bdb549cf' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e98513d74d41dad01605a7023f550159' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getAjaxElementWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9497b4093c5b5747fcc2e6cb4c4ad32f' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getAjaxElementUpdateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40df1fb3f29e13e5a12d8eb200e5c739' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getAjaxElementUpdateClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '233e344b432610a71aeedd4c47d40987' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildAjaxElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be32dce8a1a17b77c3f6492aa6a389e0' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildAjaxElementWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd22751e388bfb8839a18c8c4c59c197c' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildAjaxElementTrigger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '246659b3cd9fbbe24f51bb04a61ae2da' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildAjaxElementUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07311e71d0453cbc17bfb8cedb32a9a1' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'validateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3895ae310d0f0a15e718d6d1fac4bc49' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'submitAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ed045b4dadd8e1da44482b53372f9ae' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'updateAjaxElementCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9ce801d2dabc08a054066d4d70f51a9' => 
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
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getAjaxElementWrapperRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63543ed87eea19edcfb3b389aa0141cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Other option value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1088cde2636d4bb24b5d1b7234ced98a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default option value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd24904753b0c277a09adefbf843ca7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default option value.
   *
   * @see \\Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler::getMessageEmails
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a63de7e0c570c24fb7862426d31a0176' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value. (This is used by the handler\'s settings.)
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a1174c7f7c69c3dab683db601dbb2ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b70e06c0d9698a203e7d690f654a948' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c194c90ed9f0e4670f9440e6a7e64573' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f95a611df8270867d878ee296ed074c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd72aa4a03f08ef7a8e70b6110c87f35f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A mail manager for sending email.
   *
   * @var \\Drupal\\Core\\Mail\\MailManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a07440089cea9ca80644541a57c8a103' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f4fc8cc1e2185429f6b2526ac158729a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform theme manager.
   *
   * @var \\Drupal\\webform\\WebformThemeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1815e3d1d511eb7c1cf43b45981ae64e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element plugin manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c25cdda5a6e3f3cdd7249e33b95fc5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache of default configuration values.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23cb4b902df435409b89216c8ae57474' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9414d76fa66de1a63beab42438758a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24ab14402c88f7200953ab8f57191749' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de437b4fc7438737db4c34063135d5c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get configuration default values.
   *
   * @return array
   *   Configuration default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getDefaultConfigurationValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe34781535b6401c5652ecf6e98c6f2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get configuration default value.
   *
   * @param string $name
   *   Configuration name.
   *
   * @return string|array
   *   Configuration default value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getDefaultConfigurationValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f703cea9a9b05f146389543fed3d175b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get mail configuration values.
   *
   * @return array
   *   An associative array containing email configuration values,
   *   along with the default configuration values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getEmailConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53f48f6f12369893c522b59be5690bdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ac9e61b2be65b7f457f1673a062394c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bbf9ec98c52509e12fc199707a837a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19b6cc728b0d6e20a6dc7bad821d03df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1780add85dd2103d827f99809f9388e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87fc1aae93ba184216ef03a124ab3d1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62a53375b8b6f0e86d15e84ce5b94043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get message to, cc, bcc, and from email addresses.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param string $configuration_name
   *   The email configuration name. (i.e. to, cc, bcc, or from)
   * @param string $configuration_value
   *   The email configuration value.
   *
   * @return array
   *   An array of email addresses and/or tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getMessageEmails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '179878985e7aefbc2da6d17866599550' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get message file attachments.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   *
   * @return array
   *   A array of file attachments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getMessageAttachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71434c67990f4dda0e38e84062aafb23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementAttachmentInterface $element_plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getMessageAttachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df85937c9a30ad9a831634ba96bccd40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'sendMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae808c429aef79214ff60a4696901332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'hasRecipient',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f10abddf406a4f83e04838fc5dc5c841' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'resendMessageForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '098bf44fb68b1c5b487712e122396cdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getMessageSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2308853da383961748ce8c10b976be2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that HTML emails are supported.
   *
   * @return bool
   *   TRUE if HTML email is supported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'supportsHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad30bb0bc616c8ecb13e62319fb3cac7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that emailing files as attachments is supported.
   *
   * @return bool
   *   TRUE if emailing files as attachments is supported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'supportsAttachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c73d897b10827dfe9ba17ef3ca7e4e69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build debug message.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   * @param array $message
   *   An email message.
   *
   * @return array
   *   Debug message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildDebugMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa66035403888287efe4a31e48012fd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the Mail System\'s formatter module name.
   *
   * @return string
   *   The Mail System\'s formatter module name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getMailSystemFormatter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c6cf97ec1ca6b9c3acd959f17a04d24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get message body default values, which can be formatted as text or html.
   *
   * @param string $format
   *   If a format (text or html) is provided the default value for the
   *   specified format is return. If no format is specified an associative
   *   array containing the text and html default body values will be returned.
   *
   * @return string|array
   *   A single (text or html) default body value or an associative array
   *   containing both the text and html default body values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getBodyDefaultValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da56ca8fea9e4bf37c876f6223a22113' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build A select other element for email address and names.
   *
   * @param string $name
   *   The element\'s key.
   * @param string $title
   *   The element\'s title.
   * @param string $label
   *   The element\'s label.
   * @param bool $required
   *   TRUE if the element is required.
   * @param array $element_options
   *   The element options.
   * @param array $options_options
   *   The options options.
   * @param array $role_options
   *   The (user) role options.
   * @param array $other_options
   *   The other options.
   *
   * @return array
   *   A select other element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d485820dc9f46aff6fbeac50b4f5e69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build attachment to be displayed via debug message and resend form.
   *
   * @param array $attachments
   *   An array of email attachments.
   *
   * @return array
   *   A renderable array containing links to attachments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildAttachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'beed68689678e4706d709cbc12058fc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get element key from webform token.
   *
   * @param string $token
   *   The token.
   * @param string $format
   *   The element format.
   *
   * @return string|null
   *   The element key or NULL if token can not be parsed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'getElementKeyFromToken',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd6100addc0997199b38140503b9e349' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformHandler',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'mail' => 'Drupal\\Component\\Utility\\Mail',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'webformajaxelementtrait' => 'Drupal\\webform\\Element\\WebformAjaxElementTrait',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformselectother' => 'Drupal\\webform\\Element\\WebformSelectOther',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformhandlerbase' => 'Drupal\\webform\\Plugin\\WebformHandlerBase',
          'webformhandlermessageinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerMessageInterface',
          'webformtwigextension' => 'Drupal\\webform\\Twig\\WebformTwigExtension',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformHandler\\EmailWebformHandler',
         'functionName' => 'buildTokenTreeElement',
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