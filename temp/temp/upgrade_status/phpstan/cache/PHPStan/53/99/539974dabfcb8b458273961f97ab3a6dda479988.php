<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Form/WebformDialogFormTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformAjaxFormTrait.php-1594241402',
   'data' => 
  array (
    'f65e24aefd86bdd333508ada86357d18' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4b500e10789676db1ac688eac2a4bcd' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26b30f51266f7ecebe115282865122a6' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd5863ebe123b0b9ff21bd8359ff2553d' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6097b951256517afa23cdecf1828e213' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec5ab76c862de42d116dfb3a0312fa4d' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'isDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bf70d24fb1880bedccff4cf60583bc2' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'isOffCanvasDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ee56f834897ea1f03c1c48bfb5941e2' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '501e3676ad057170b5d59a959dcb1b33' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'buildAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fde467927591f695238fd8d141765c3' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c01cb33631ba2d67dad6199915bdb312' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55cb4c4851231aa9fea46d51d77d4a35' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'isCallableAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '645f0d00b21a724450892ca1e2616731' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'missingAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4b08f6385dbe85c9b624ae949d5c998' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd072ba3dfed6a20ad2e8f1b463c3a081' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b88fb258cc26e6194468b9d5d3ab8588' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8d6731c23dcd3493eb34d74afee9463' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9dd3574ebd557c85e523548848a0a786' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'getFormStateRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed9ebc287efb5fe5f510c47bf183bc5c' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'announce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '408878d673e84001e2fe9e26aa13d74b' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'getAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '698c3fdffa905f5f3f33f0546b61f1db' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'setAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5726ee83c45f340f92461d4c374af401' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'resetAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f1aec9cc3708bfbe203ad30a5879917' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec340479820b8c72c29fb1266392d3d4' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'buildDialogForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fb77a2eb975df2907774097143f8e5e' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'buildDialogConfirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0402027675f45c319b9fe26f4ca5cfde' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'buildDialogDeleteAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f25fe9556ca7b93a1410160c19b0ab12' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad8170f578aa90633a798a2fa056185f' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2fbaab1129ceb7baec8387117995110' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5841af4228cc264816d16e1e6bfbc776' => 
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
         'className' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
         'functionName' => 'closeDialog',
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