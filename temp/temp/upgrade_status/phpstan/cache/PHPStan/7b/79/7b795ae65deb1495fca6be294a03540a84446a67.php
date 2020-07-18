<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_ui/src/Form/WebformUiElementTypeFormBase.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformDialogFormTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformAjaxFormTrait.php-1594241402',
   'data' => 
  array (
    'e94c313a84cf1ea00d64e789ae49c1ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a abstract element type webform for a webform element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8637391be53fd3130f17f73311fc24d2' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04f8ae2ca2d6fdc20ac86fc6a7a79141' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce985fb67100dbc7edf297b5f1f08fe0' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b8a005ca098b8be5b6385324b0ebfbc' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23bd53bd66434c34b4e1abfdfcd393e8' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1179c13a7d618685896b629fa0411642' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'isDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a69f69ce0de19ca03352b9d3e41a412' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'isOffCanvasDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ccb3d37394ad10c0927798ffcfb4ad02' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5157364c86a46b63605f2a70400cbd4d' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6aa9a3b28e34a19012a8c3deb1bb874' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '858a7dbe89c83b2ec316abee3416df3a' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78586c87212a4551cdded214e895611c' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'isCallableAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a51bd8b97897a183ec3d873ca593532' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'missingAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3efb60ad319086640d8e3273fcb548a4' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a22b0e38c9665f70329022e13bdab6ba' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd86521b10725718a918b3b424cd497f0' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd913c0ecb359a2b70e1be2fb4996311b' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4be88dfdf8f45070f143bf55fa441a3c' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'getFormStateRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e901ba4642bfca1373930344ccbc45c2' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'announce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b037e7ffa73df6ef62853a6547754155' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'getAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab8e7201c83f211d9494f2dfe931b449' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'setAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6adbe0023a677b8223df1157cc088d3' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'resetAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19387ac13723d61ccea0cfc107c89dd1' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1748187e7fc13fc62665556b627ffe99' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildDialogForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef2503214362a28351828b656d4c8ff5' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildDialogConfirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3275fb7169695bc8be69bc2eaf7f5a90' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildDialogDeleteAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b33c5333df42ca673732233bea8db21' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '084929cce51d5cd80ba050a0d219fcaa' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e32d77d9a6ce9caf21efa9bb98f8ebf' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70715f820ff4752bb2a0479d63262ec2' => 
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
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'closeDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de8ecfcfd78e6abf5d138057d02f9189' => 
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
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c7909200a1e6248cd573762f1936f89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '977cf26af01475ec1822b38672fc0cdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user data service.
   *
   * @var \\Drupal\\user\\UserDataInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b31bb94128768d5fd300b5f95b06be6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A temp webform.
   *
   * @var \\Drupal\\webform\\WebformInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a1b875fd9c8de002923a6b210e367f0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A temp webform submission.
   *
   * @var \\Drupal\\webform\\WebformSubmissionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c22ab230158e545c944d9bac349ff9a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19a59f0f42cdedaf640f4bbd20f2b93d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e932374ea93511995c06c911e91ec099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Never trigger validation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a01ff49d1aa9603d59c6da412ebfc2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d7d30c31ee31820c45f6a3a471fb6e0' => 
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
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7369e5ec281e7575ccf8565e50031a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get table header.
   *
   * @return array
   *   An array containing table header.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'getHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94d2eb435e8475bda9ed4ff7b2e669d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build element type row.
   *
   * @param \\Drupal\\webform\\Plugin\\WebformElementInterface $webform_element
   *   Webform element plugin.
   * @param \\Drupal\\Core\\Url $url
   *   A URL.
   * @param string $label
   *   Operation label.
   *
   * @return array
   *   A renderable array containing the element type row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fde09d24bf92149a3b97793f16024dae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if webform element type preview is enabled.
   *
   * @return bool
   *   TRUE if webform element type preview is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'isPreviewEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36e193c55d31ca8f72c31310678da09f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build and fully initialize and prepare a preview of a webform element.
   *
   * @param \\Drupal\\webform\\Plugin\\WebformElementInterface $webform_element
   *   A webform element plugin.
   *
   * @return array
   *   A fully initialized and prepared preview of a webform element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildElementPreview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94764f339c7a057571ddb6126cd94454' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build preview placeholder for webform element.
   *
   * @param string $text
   *   Placeholder text.
   *
   * @return array
   *   A preview placeholder for webform element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'buildElementPreviewPlaceholder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8314a6611d423813547938e8042a59bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the sorted definition of all WebformElement plugins.
   *
   * @return array
   *   An array of WebformElement plugin definitions. Keys are element types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui\\Form',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'htmlcommand' => 'Drupal\\Core\\Ajax\\HtmlCommand',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'webform' => 'Drupal\\webform\\Entity\\Webform',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'webformmanagedfilebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase',
          'webformelementinterface' => 'Drupal\\webform\\Plugin\\WebformElementInterface',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\Form\\WebformUiElementTypeFormBase',
         'functionName' => 'getDefinitions',
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