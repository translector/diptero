<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Form/WebformHelpVideoForm.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformDialogFormTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformAjaxFormTrait.php-1594241402',
   'data' => 
  array (
    'fad2fa948f8855d872f46780e89366bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Help video form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '981af7c12e5d42df67f8a9eb565963d3' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf48c70436abd7903d17c6e6a118494d' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd50a8b17124d52394690b0f05633448c' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97e1c01444246200f6bd19952ea391e4' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd115260a5cf1ec876e20809ab4f23638' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1a3cb65d1fdaf097eafb57c08c2645a' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'isDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a29d23e9655de350edecf52beb62f7b' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'isOffCanvasDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f1c74a29ffa9591a1df2ecd9f5c57b5' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c272eae11b14d23faa910483cb31f479' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'buildAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80ec4289896b72e1e42f408d3c953b06' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1f69dd98aabdb5e9314566c76ea3d71' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10a5a510f1ef308792e316ce113385b1' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'isCallableAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55bb72f9c12f3b774ad4061e60da8a79' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'missingAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '378a86c4629dbe5b2e7cfa0e6a82eef3' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1360947e2e9f331e17dfe3f9e8a64f87' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddb47f4fdf5dcbcde0c760fccd9ad2e4' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f25676a18f5166b4e1da7362a3dfff4' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '062450e957ff76869a05d306fcb06c7c' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'getFormStateRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19225371a460019bef392926107dca68' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'announce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f96a3967b97cf0f962f335a722defe5e' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'getAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'efded746e44d00977ff04c83087f40b7' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'setAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68b096ebba74f392c5b6fe7abad7d035' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'resetAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aacd21626d139ac4d0ff5a5401062349' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff7324feb2b2f2fba0627bb04599bbf2' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'buildDialogForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0628516c255e157d648668c9a2adee11' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'buildDialogConfirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac2effab97c552cfe766c5d9e4d62e4d' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'buildDialogDeleteAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f64af29e36aec2e8423cd78955482ccb' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b26ced448a246dd1c731fafc5b4a9c3' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '02bd0e2d87c5b01fe3c78aefa7fffd2d' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8baa62ec9bee4d764f75bc3dd0587865' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'closeDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43b5bd90c7738f5ab3da79f7905a3888' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform help manager.
   *
   * @var \\Drupal\\Component\\Plugin\\PluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13e006d5611048743cd9495e8c10c9e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The id of the current video.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59cbcba1285f25e1fe6ad3160627fdb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'getFormId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7cdd58c117486e21288faaae90be189c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '720031c5149697fb0ca68661459ff964' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c91590ff7eb259f1b8069e96af37cba6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3e90e8a542fc5eaeb4d7c7a129265c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\webform\\Form\\WebformHelpVideoForm',
         'functionName' => 'submitForm',
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