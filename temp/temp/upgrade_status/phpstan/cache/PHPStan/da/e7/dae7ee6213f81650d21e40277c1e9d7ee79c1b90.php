<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_ui/src/WebformUiEntityElementsForm.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Form/WebformEntityAjaxFormTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformAjaxFormTrait.php-1594241402',
   'data' => 
  array (
    'df28707a06a93858e70a0949e9cf5ee7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Webform manage elements UI form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '62d45625e1e593e0de86864d2186845f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for webform entity ajax support.
 *
 * @todo Issue #2785047: In Outside In mode, messages should appear in the off-canvas tray, not the main page.
 * @see https://www.drupal.org/node/2785047
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83e1a31ce2fe34a9b664e7342d3b30f3' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '212588dfb25e055a2edf905c663633aa' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2ef8ac6cb6d85b8cb4fe046280f5c26f' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70de6081119e44cabbe93dcf1e8bf458' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41070ac6c9746eb0261b37daf4dfd55e' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'isDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f551ce5894e6b0f6c0a86b36375f3d4f' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'isOffCanvasDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c28f6a7652d857811c009e32c48d034c' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '980ad188c8d62da93392241c29687401' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'buildAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '948c5d364730c82d7e20722b6cb0d37b' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ff0ff8ee00e57d866133d4c43f884db' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83812bf7394d690caa7c40c00a836b76' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'isCallableAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4315dba9f890ccd52125c62cfff74709' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'missingAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e64ccb8ee261b3ac9f028b68c00f407' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '347ede17c08d62c636221676774e88f4' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73483b0b183d0c24951a2b322ef3e330' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '183caf731c73f345837747ec425555bd' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9239ad6fdb8055bcb4d4284de992402f' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getFormStateRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b6f653a8172bed99134cb61dc32ae8c' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'announce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edd82b7c72947c98768b893c79b910a3' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '428bd414da61d0bd334f6edbbf6b1b88' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'setAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2df60569e80c69e3f05995a325c59c71' => 
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
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'resetAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bfa8c20cc9c5e720ae8959226f9d315' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e81e07be3f0b9fcd612552dc15eb2ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if dialogs are disabled.
   *
   * @return bool
   *   TRUE if dialogs are disabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'isDialogDisabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85ef57d6bf9b40262f18590d320bda40' => 
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
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9265728e48a995a334983eba9117ff91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '162e1df30a95600ccd02695c71bd0b43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'actions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddd2286e5cd851e666350b738f41708b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9dd7c82e2c898d80869781fabcacc5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Form\\FormBuilderInterface $form_builder */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b6882a5c22894998b5652716a9599c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Form',
         'uses' => 
        array (
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformhtmlcommand' => 'Drupal\\webform\\Ajax\\WebformHtmlCommand',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f509f271637dc836e50d9529b51e44a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of required states.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cddaa964e192378519afc8aa2653e2a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e28f48b517b6bb2a1ad26c3043a6118f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The element info manager.
   *
   * @var \\Drupal\\Core\\Render\\ElementInfoManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ae7fd59354c746e6433bd0b9479b280' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2088a088dff53371d444a7da29dff405' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element validator.
   *
   * @var \\Drupal\\webform\\WebformEntityElementsValidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f459f2d8b0dce018c6aabb32795fa04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ce615ab396f71bc422dba170479c7ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '579434ea5946e2ecd6897adf1020135e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e11c20610be29ab1a012a8ca691cd651' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a69777ab4345809f69b238f6d34baaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd511644f9217bcf8f4d0e003ec9698b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa8836e248b07a5ee1193d46530c1553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd74d22cc25cde76f947509c50b7ebb86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04f38ad8ef84fc4ae9701a7de8fdf4ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'actionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22a056e6daae9a79883850885e40ed98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build updated elements using the new parent child relationship.
   *
   * @param array $elements
   *   An associative array that will be populated with updated elements
   *   hierarchy.
   * @param string $key
   *   The current element key. The blank empty key represents the elements
   *   root.
   * @param array $webform_ui_elements
   *   An associative array contain the reordered elements parent child
   *   relationship.
   * @param array $elements_flattened
   *   An associative array containing the raw flattened elements that will
   *   copied into the updated elements hierarchy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'buildUpdatedElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '857330cbe18a194ebef2cedbc4b3aafb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get webform\'s elements as an associative array of orderable elements.
   *
   * @return array
   *   An associative array of orderable elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getOrderableElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf8820fc236edbd2a94f0d0da0e064d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getOrderableElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd56114384ac2c3bb524e6bc79e93cb6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the elements table header.
   *
   * @return array
   *   The header elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getTableHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d3dd248129cfdb3b88d822b5add7fc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getTableHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2980453abeec88d81fecbaf7794e889' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get parent (container) elements as options.
   *
   * @param array $elements
   *   A flattened array of elements.
   *
   * @return array
   *   Parent (container) elements as options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getParentOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96ac4d86a25c92c10afec1923e8d8a77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an row for a single element.
   *
   * @param array $element
   *   Webform element.
   * @param int $delta
   *   The number of elements.
   * @param array $parent_options
   *   An associative array of parent (container) options.
   *
   * @return array
   *   The row for the element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getElementRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ee631a29835f253b3a75e62a1d64655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getElementRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e15ac22fa5a76eacabf3e0536ae48eb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementInterface $webform_element */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getElementRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca785dbae55369c66e800beb58a67dc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get customize actions row.
   *
   * @return array
   *   The customize actions row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getCustomizeActionsRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7de44645b3df6c5baa2ae89da6c37c35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_ui',
         'uses' => 
        array (
          'bundleentityformbase' => 'Drupal\\Core\\Entity\\BundleEntityFormBase',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
          'webformelementstates' => 'Drupal\\webform\\Element\\WebformElementStates',
          'webformentityajaxformtrait' => 'Drupal\\webform\\Form\\WebformEntityAjaxFormTrait',
          'webformelement' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformElement',
          'webformtable' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformTable',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\webform_ui\\WebformUiEntityElementsForm',
         'functionName' => 'getCustomizeActionsRow',
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