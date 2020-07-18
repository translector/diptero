<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_ui/src/Form/WebformUiElementFormBase.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformDialogFormTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformAjaxFormTrait.php-1594241402',
   'data' => 
  array (
    '13b6dd833a88f054a523ef2bd535fde5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for webform element webforms.
 *
 * The basic workflow for handling webform elements.
 *
 * - Read the element.
 * - Build element\'s properties webform.
 * - Set the property values.
 * - Alter the element\'s properties webform.
 * - Process the element\'s properties webform.
 * - Validate the element\'s properties webform.
 * - Submit the element\'s properties webform.
 * - Get property values from the webform state\'s values.
 * - Remove default properties from the element\'s properties.
 * - Update element properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9aac9bb46e5e25fb83570a16c813f1fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for webform dialog support.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6ba3c841209623654efd4548d57f599' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for webform ajax support.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f825e56a51d27aec73d9a8903e6ec6ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns if webform is using Ajax.
   *
   * @return bool
   *   TRUE if webform is using Ajax.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '213ff87ffee1549622c61b7992fc8e24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cancel form #ajax callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An Ajax response that display validation error messages or redirects
   *   to a URL
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97454af8e6fbb1bc9f92ac1d1b85a203' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get default ajax callback settings.
   *
   * @return array
   *   An associative array containing default ajax callback settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c071466dee96169ffdbd9730f01f8de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is the current request for an Ajax modal/dialog.
   *
   * @return bool
   *   TRUE if the current request is for an Ajax modal/dialog.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6335710803885453c087e00f17219381' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is the current request for an off canvas dialog.
   *
   * @return bool
   *   TRUE if the current request is for an off canvas dialog.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isOffCanvasDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '845e689cc86ec3163172a3e811a96b8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the form\'s Ajax wrapper id.
   *
   * @return string
   *   The form\'s Ajax wrapper id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc2d9a033c8c30c0e2eab7785bafb704' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add Ajax support to a form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $settings
   *   Ajax settings.
   *
   * @return array
   *   The form with Ajax callbacks.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'buildAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e570f090c5cf6807af6b652999294f2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit form #ajax callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An Ajax response that display validation error messages or redirects
   *   to a URL
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd6a4ab77f802e21b1cafe7db1077ec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate form #ajax callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64cb04578c424d226e02344695a957c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if Ajax callback is callable.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return bool
   *   TRUE if if Ajax callback exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isCallableAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '668f3c8b5ebc2cf9c3811dbc5f2dd21d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handle missing Ajax callback.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'missingAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '018a82cb862b2cbcfea1a6786b61817c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Empty submit callback used to only have the submit button to use an #ajax submit callback.
   *
   * This allows modal dialog to using ::submitCallback to validate and submit
   * the form via one ajax request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff7c576653042c2a450b4cddda837bf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create an AjaxResponse or WebformAjaxResponse object.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An AjaxResponse or WebformAjaxResponse object
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02777053149f7cdcc0d1fe5d1571b3c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9fd0fa0b3d9f4135536766ecc00334e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace form via an Ajax response.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An Ajax response that replaces a form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23f1ba23f3cdd2b383c6c43c979cc8c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get redirect URL from the form\'s state.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return bool|\\Drupal\\Core\\GeneratedUrl|string
   *   The redirect URL or FALSE if the form is not redirecting.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getFormStateRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6787f26502365020959fe65f79d18ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queue announcement with Ajax response.
   *
   * @param string $text
   *   A string to be read by the UA.
   * @param string $priority
   *   A string to indicate the priority of the message. Can be either
   *   \'polite\' or \'assertive\'.
   *
   * @see \\Drupal\\Core\\Ajax\\AnnounceCommand
   * @see \\Drupal\\webform\\Form\\WebformAjaxFormTrait::submitAjaxForm
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'announce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d5564bdb9b911f1bdb7fe00a48c03a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get announcements.
   *
   * @return array
   *   An associative array of announcements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b742a1aeb92b0ddc07c56c7a80208a5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set announcements.
   *
   * @param array $announcements
   *   An associative array of announcements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'setAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd46071d49ebef93271de5b4172166bf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset announcements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'announcecommand' => 'Drupal\\Core\\Ajax\\AnnounceCommand',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformclosedialogcommand' => 'Drupal\\webform\\Ajax\\WebformCloseDialogCommand',
          'webformconfirmreloadcommand' => 'Drupal\\webform\\Ajax\\WebformConfirmReloadCommand',
          'webformrefreshcommand' => 'Drupal\\webform\\Ajax\\WebformRefreshCommand',
          'webformscrolltopcommand' => 'Drupal\\webform\\Ajax\\WebformScrollTopCommand',
          'webformsubmissionajaxresponse' => 'Drupal\\webform\\Ajax\\WebformSubmissionAjaxResponse',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformsubmissionform' => 'Drupal\\webform\\WebformSubmissionForm',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'resetAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2767c968d3fd9ef07f21d2d4e330d202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2d60036d94162eec83789444b9f3f4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add modal dialog support to a form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $settings
   *   Ajax settings.
   *
   * @return array
   *   The webform with modal dialog support.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'buildDialogForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c84183d32653f0bb1eb466ea1100cbe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add modal dialog support to a confirm form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The webform with modal dialog support.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'buildDialogConfirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6582d92d3923de5e569f6a469241f7bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build webform dialog delete link.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param \\Drupal\\Core\\Url $url
   *   The delete URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'buildDialogDeleteAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfc630443b35eccccd8ba92c4ca4ab1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0f528d1cb4cb522093b3e78da1bb379' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate callback to clear validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c554d9ef2ee65837edf249fcf8bc76d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Empty submit callback used to only have the submit button to use an #ajax submit callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd00fe40bc28ef6a5ca9d8870926b0672' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Close dialog.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return bool|\\Drupal\\Core\\Ajax\\AjaxResponse
   *   An AJAX response that display validation error messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'closedialogcommand' => 'Drupal\\Core\\Ajax\\CloseDialogCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'closeDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bc86b1be5b94b4c85f294ef47414aa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13903242dfb143b3ee726de03f2742b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity field manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd72ffaaa5ff4b724d607fa59a9266296' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '765f8dd8144418a1e3dd99e417e44b41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element validator.
   *
   * @var \\Drupal\\webform\\WebformEntityElementsValidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0f3d9939e047e4dd3ade9c06b797710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f1e8f6bd673f9cdb93d62dbde824a6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3944f54be18a928a66368b27743ebffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b83f939d0207072af016d8b84018e52f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0b90020b5d91d2c0ce86afb0f6cb582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element parent key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '287b1456fbd9f60796db6a933a64569a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element\'s original element type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '865b73812bc81d62068bfb81ef931077' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The operation of the current webform.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4d16afad8eecd55a72ecb44d23a8706' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The action of the current webform.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec6f45f40d230784813d595ff9f86db3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getFormId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa6f2586a429dac7eadda14a2f58893c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2248573a9dcf9b8ad360f0f032b376d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc8deb856960649d28eaae5db049bd3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c211404b3a8a43501b2d43d2536b0187' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f569c817625d1a39282c12a83a4a7261' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isNew',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b006e954bf27862f53fa16e339d082d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc7e273d0896deb80baa90527f386174' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41445e49066f140bbec3c369e27250b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5dc587424126e5d7fc5bca1d6946228d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getParentKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ca9c4999b4e5d197277488dd5aabc7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getWebformElementPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c09e9facdb7c47a95f5daae310cea9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the parent element is a \'webform_flexbox\'.
   *
   * @param string|null $key
   *   The element\'s key. Only applicable for existing elements.
   * @param string|null $parent_key
   *   The element\'s parent key. Only applicable for new elements.
   *   Parent key is set via query string parameter. (?parent={parent_key})
   *
   * @return bool
   *   TRUE if the parent element is a \'webform_flexbox\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isParentElementFlexbox',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f00d9f04950e04a32916f26f1dd7823f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if parent key prefixing is enabled.
   *
   * @param string|null $parent_key
   *   The element\'s parent key.
   *
   * @return bool
   *   TRUE if parent key prefixing is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'isParentKeyPrefixEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4de960bb6556f339a9cb125c47370521' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the parent key prefix.
   *
   * Parent key prefix only applies to elements withing a
   * \'webform_table_row\'.
   *
   * @param string|null $parent_key
   *   The element\'s parent key.
   *
   * @return string|null
   *   The parent key prefix or NULL is no parent key prefix is applicable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getParentKeyPrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd27036d1e0e699c04eb93a2ce582bdab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the webform element key already exists.
   *
   * @param string $key
   *   The webform element key.
   *
   * @return bool
   *   TRUE if the webform element key, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'exists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89751e567861e048b6b72ae7f2d6adf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the default key for the current element.
   *
   * Default key will be auto incremented when there are duplicate keys.
   *
   * @return null|string
   *   An element\'s default key which will be incremented to prevent duplicate
   *   keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getDefaultKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fc6cb8e4c8b322d1cdb4f2a292b9c13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build update default value form elements.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'buildDefaultValueForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b55ca3adf8b66e5facf02071aae4a15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get updated default value for an element.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'getDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '67afd46abeb9f57f7be3adeef1eb5955' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set default value to be updated.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'setDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4dbf141af2a4d3ecaab63f9d731bfcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value validation handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstate' => 'Drupal\\Core\\Form\\SubformState',
          'url' => 'Drupal\\Core\\Url',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformtablerow' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTableRow',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformyaml' => 'Drupal\\webform\\Utility\\WebformYaml',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementFormBase',
         'functionName' => 'validateDefaultValue',
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