<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformSubmissionForm.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Form/WebformDialogFormTrait.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Form/WebformAjaxFormTrait.php-1594241402',
   'data' => 
  array (
    'f33d3c151932ef94b592c50f53986d07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform to collect and edit submissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a05ea4e2bd811ead6f662b3a22faba24' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40ff9ef64106f214bce032a63de8efa0' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de9a4555ccf070213186861c08c780bc' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '262368524df1a902211c90527a3630cf' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a7bb6e1e993de11bc62dbd23def172b' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getDefaultAjaxSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db7ec17de0b5255372e53345c6c35bf9' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46d18d87f77c11fb2207333466fb1df1' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isOffCanvasDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00b1d751e208701e6eae3f13e3af7109' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cad8c1008959421773418075336142f0' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e26921322ef299b990f644648bc7979' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'submitAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e9e305fcc1066cdab73e21233939c95' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6006735387f80aea4180554ae08f36a' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isCallableAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7708b5b7506005ae23fd3a4a40e549b3' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'missingAjaxCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a3e137cb67e7eb35ad1c136982a57a3' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4df4b5cd7661b610871b9999527741ac' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aaf49942e011298ecd62a4d53e57c4a4' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'createAjaxResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26492152d947996d4f763ffe31f613f0' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'replaceForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48eee7eac81bb78d47af197ec178dfd4' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getFormStateRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a9cde9c7dbc059da34bc8ac59b0e804f' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'announce',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fe1c53f7eb0f48e19c0ae7b076d0ae3' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ed3466bfdfbdd1cd21b99e9b0f5227c' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6de95d06c94df867bf57b3c5b9eed687' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'resetAnnouncements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '60775ad3109f693f934b9e1810f9ea41' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44a51a89ec3a8364f899db581d3fe24c' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildDialogForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d1e096ade467f8d1422154412233ac8' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildDialogConfirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec79197db626a9209f8c0bda41f30796' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildDialogDeleteAction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b2213bf91c937ed676db6e0aee914757' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fa71379930db4fdbaed81345f6cefa6' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2cfde0e140e8d69bd1fb4cb9af4790a' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'noSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b941ce2ec80a66e1b105ecad81decdf8' => 
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
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'closeDialog',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e40fc3d020b137890ec371a5eb4a065' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab4d177fb998202d740b732c565b4ecc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer service.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ba428e0622b8df86c253897e4bc880c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The kill switch.
   *
   * @var \\Drupal\\Core\\PageCache\\ResponsePolicy\\KillSwitch
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73f06a47eca0803de2fc57b2f206ada2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The path alias manager.
   *
   * @var \\Drupal\\path_alias\\AliasManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a6e6d44455a9f9bdfb810a65ef75419' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The path validator service.
   *
   * @var \\Drupal\\Core\\Path\\PathValidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98a09d4b3c3d37614635d637bfcc4c7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform element plugin manager.
   *
   * @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a398b692b91c7d8eb8443a27bf6fbbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform request handler.
   *
   * @var \\Drupal\\webform\\WebformRequestInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1de6ef4480341fca46f3ccf10c98d7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform third party settings manager.
   *
   * @var \\Drupal\\webform\\WebformThirdPartySettingsManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87fede1efdfce36ccc670a763be2d980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform message manager.
   *
   * @var \\Drupal\\webform\\WebformMessageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d44e12c9f50fbd47f5c8f4e3c720205' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform token manager.
   *
   * @var \\Drupal\\webform\\WebformTokenManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '183bc727449c69316578fab3312e0247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission conditions (#states) validator.
   *
   * @var \\Drupal\\webform\\WebformSubmissionConditionsValidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5aadd51978ce0936e34572789f98ecaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform entity reference manager.
   *
   * @var \\Drupal\\webform\\WebformEntityReferenceManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdb862128385cacbe953a4a69d3bc6cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The selection plugin manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e316c73a4ec0f67ce22917faf772e219' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission generation service.
   *
   * @var \\Drupal\\webform\\WebformSubmissionGenerateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90779df252e3c22904117b6901d88ac4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform submission.
   *
   * @var \\Drupal\\webform\\WebformSubmissionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd727d4c194552455495fbaef47c9a08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53201c2b73c4d6926219b9b35bcec8db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * States API prefix.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f3f295707a50a5769591e947364216c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the original submission data passed via the EntityFormBuilder.
   *
   * @var array
   *
   * @see \\Drupal\\webform\\WebformSubmissionForm::setEntity
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c912497bda74a99190baa0e2ef0b424c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bb5fa4361efad3d94dfaf4002f92126' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getBaseFormId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '357033e5e22578a94942d05b858ec7de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getFormId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a645748184425cb350a9bc3fe7b4c641' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getWrapperId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '09d101c5f0b426512a07fd560c8ddf82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * This is the best place to override an entity form\'s default settings
   * because it is called immediately after the form object is initialized.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFormBuilder::getForm
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a464fea9714641ff7d3d8430146c5cde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcb8a9b8a4389d360cc8d23b477685bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e29c3a1a4b193233792457f21a39bbf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5558e8731175aff739bb1006488dd932' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Override webform settings for the webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   A webform submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'overrideSettings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7489892af2db9ce2a708533617202dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'copyFormValuesToEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1362e4832b2d0f977a649a0808037e63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3308544dd0fdc92645e1db331171a004' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be45c2ad62e8e4db4c93c03dee48f2d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get custom webform which is displayed instead of the webform\'s elements.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array|bool
   *   A custom webform or FALSE if the default webform containing the webform\'s
   *   elements should be built.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getCustomForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00d6f27686652f2e6c42ef48281e2861' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Display draft, previous submission, and autofill status messages for this webform submission.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'displayMessages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '093903bf9c261a17f53298c3cd19d1e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attach libraries to the form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'attachLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '106fd8ec521a2e53fcef1f8e9e14b338' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attach behaviors with libraries to the form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'attachBehaviors',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2caaad0fcc99142c58498e6bb30e7f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'afterBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa51864af7227d5e420bdf46e3520923' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the wizard page submit buttons for the current entity form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'pagesElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb228c81a8e521184bc6029c0d7c58d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'actionsElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ce00b8299636475571a2fd332c329c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'actions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b6c84155d72588aa3234c1ef77187b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'goto\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'gotoPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1fca99eb437b86d07b55c95b6c47fd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'submit\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'submit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eef32ad0835dd43b405389460c6fe61f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'next\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'next',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '44ff5d7576df3a5f76cd05990a9fa995' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'previous\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'previous',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e29a6f2eb2aa8e4be94cc577b005d2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the wizard submit action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'wizardSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b32163bbd59b1f950fff7109e8924072' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler to autosave when there are validation errors.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'autosave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '956f5d7350efdbe5e5acc2496ac9e3c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'draft\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'draft',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef31ebaa96abbc412be181e93aea4cfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'complete\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'complete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a769fc79ed6bad96ac95749c31a2f0d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission validation that does nothing but clear validation errors.
   *
   * This method is used by wizard/preview previous buttons and the reset button
   * to prevent all form validation errors from being displayed while still
   * allowing an element\'s #validate callback to be triggered.
   *
   * This callback is being used instead of adding
   * #limit_validation_errors = [] to the submit buttons because
   * #limit_validation_errors also ignores all form values set via an element\'s
   * #validate callback.
   *
   * More complex (web)form elements user #validate callbacks
   * to process and alter an element\'s submitted value. Element\'s that rely on
   * #validate to alter the submitted value include \'Password Confirm\',
   * \'Email Confirm\', \'Composite Elements\', \'Other Elements\', and more…
   *
   * If the #limit_validation_errors property is used within a multi-step wizard
   * form, previously submitted values will be corrupted.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \\Drupal\\Core\\Form\\FormValidator::handleErrorsWithLimitedValidation
   * @see \\Drupal\\Core\\Render\\Element\\PasswordConfirm::validatePasswordConfirm
   * @see \\Drupal\\webform\\Element\\WebformEmailConfirm
   * @see \\Drupal\\webform\\Element\\WebformOtherBase::validateWebformOther
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'noValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d2dc1f3f712ba0ba2a92496110bd28a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'rebuild\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'rebuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e290a502af8e00dc20f1276b9f93641' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd61af5b7a3fc9dbfb7a307ef5d90be73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fda5f4b830cf3acb911f47a79c56bac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform confirm(ation) handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'confirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5388f04609c2334a28f95752e0b9109a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'confirmForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f25286f7f91c6480a455919e7dcc59a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc24e9c365f45d28a5a9cbc611cf6401' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'save',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f31e31a418dbb11eaafc4fa81cfb0f7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform submission handler for the \'reset\' action.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1684148810b7434981acc68cf24cda37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd814e7875fcd3c6d066aa98a1db5ffa7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Entity\\WebformSubmission $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3398c95c9b42a75b989bd66e8e77f9d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate uploaded managed file limits.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \\Drupal\\webform\\Plugin\\WebformElement\\WebformManagedFileBase::validateManagedFileLimit
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateUploadedManagedFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e8a1faa8a322454e059ca0d7527f0a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\file\\FileInterface[] $files */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateUploadedManagedFiles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa29e5d4750558cc7e7399d25e734ace' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get uploaded managed file ids.
   *
   * @return array
   *   An array of uploaded file ids.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getUploadedManagedFileIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5e657e121599b90221b7a889ac03e12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the webform properties from the elements.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $elements
   *   An associative array containing the elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setFormPropertiesFromElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f158ec83d5f0173d51e30f7a9bd13cef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if this is a multi-step wizard form.
   *
   * @return bool
   *   TRUE if this multi-step wizard form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'hasPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a164461c18451470b9df5c511ba035ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get visible wizard pages.
   *
   * Note: The array of pages is stored in the webform\'s state so that it can be
   * altered using hook_form_alter() and #validate callbacks.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Array of visible wizard pages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b19f0d61d81c37aae17069ab9a3e5b71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getPages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08ef541c18f56788c572b9cb18d0bbe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current page\'s key.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return string
   *   The current page\'s key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b1fb6a9bb956f2238d7d24b58a7ffab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get first page\'s key.
   *
   * @param array $pages
   *   An associative array of visible wizard pages.
   *
   * @return null|string
   *   The first page\'s key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getFirstPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ed33341e3ca85430e45f946c60869ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get last page\'s key.
   *
   * @param array $pages
   *   An associative array of visible wizard pages.
   *
   * @return null|string
   *   The last page\'s key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getLastPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f95b98f32a9fee713e08be532ed1575' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get next page\'s key.
   *
   * @param array $pages
   *   An associative array of visible wizard pages.
   * @param string $current_page
   *   The current page.
   *
   * @return null|string
   *   The next page\'s key. NULL if there is no next page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getNextPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6699e2de60d0dcffee32d6b5a3710a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get previous page\'s key.
   *
   * @param array $pages
   *   An associative array of visible wizard pages.
   * @param string $current_page
   *   The current page.
   *
   * @return null|string
   *   The previous page\'s key. NULL if there is no previous page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getPreviousPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39a61ce1d076a4dfb74da4333d42db28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set webform wizard current page.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'displayCurrentPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7b130add5f27be3a1f71d1cfdf1c361d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set webform state to redirect to a trusted redirect response.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param \\Drupal\\Core\\Url $url
   *   A URL object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setTrustedRedirectUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0873416f5fabbad63523b8b49737c5f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set webform state confirmation redirect and message.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setConfirmation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '599b14b9a619bebca367fa7b32ed6f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'setConfirmation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd8cbd73d204d41f289d52590d6e552a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Hide confirmation modal during form validation.
   *
   * This prevent duplicate modal dialog from appearing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'removeConfirmationModal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56e63bed72f9d575a2507436ae9950e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepare webform elements.
   *
   * @param array $elements
   *   An render array representing elements.
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'prepareElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76028f96b023eaf0360ab02715285029' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alter webform elements form.
   *
   * @param array $elements
   *   An render array representing elements.
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'alterElementsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ccfae0e7ec75190e8c7cb7f03d45a65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add unique class prefix to all :input #states selectors.
   *
   * @param array $array
   *   An associative array.
   *
   * @return array
   *   An associative array with unique class prefix added to all :input
   *   #states selectors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'addStatesPrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bab8306ed24f213b73d126a12c43a13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepopulate element data.
   *
   * @param array $data
   *   An array of default.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'prepopulateData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f1e3818340a3a507f9416eda565bf35c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if element prepopulate data is valid.
   *
   * @param string $element_key
   *   An element key.
   * @param string|array &$value
   *   A value.
   *
   * @return bool
   *   TRUE if element prepopulate data is valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'checkPrepopulateDataValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '98ad50a699e749438327aa86a0117b04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'checkPrepopulateDataValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e891efdd7ac4a71bf46f40bd7670da1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Populate webform elements.
   *
   * @param array $elements
   *   An render array representing elements.
   * @param array $values
   *   An array of values used to populate the elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'populateElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f660041a98803603015f10cc97f1ba75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check webform submission total limits.
   *
   * @return bool
   *   TRUE if webform submission total limit have been met.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'checkTotalLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80538957d896c5fa2673a3da72d1a36a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check webform submission user limit.
   *
   * @return bool
   *   TRUE if webform submission user limit have been met.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'checkUserLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46c7957d6cbf02a55e16d1566f6eb2e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'checkUserLimit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a60d7489e77df5ca413ed031a88b46a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if drafts are enabled.
   *
   * @return bool
   *   TRUE if drafts are enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'draftEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffea0e463252ce253226a4a311d35ab1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'draftEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '904db53aa2418932166ebd859fff18fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if reset is enabled.
   *
   * @return bool
   *   TRUE if reset is enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'resetEnabled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13590c7587c5518152ff9e9bca8c1ec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the webform confidential indicator.
   *
   * @return bool
   *   TRUE if the webform is confidential.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isConfidential',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84889d32933f7aa7ffd8ef7bb914113a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is client side validation disabled (using the webform novalidate attribute).
   *
   * @return bool
   *   TRUE if the client side validation disabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isFormNoValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47a57fb9fd745e688b1b88e24fdb3a77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is the webform being initially loaded via GET method.
   *
   * @return bool
   *   TRUE if the webform is being initially loaded via GET method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isGet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcd15fb2383602687f67ee82d7918279' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the current request is a specific route (name).
   *
   * @param string $route_name
   *   A route name.
   *
   * @return bool
   *   TRUE if the current request is a specific route (name).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7cf4ff417bc317c0f2d037214e38026' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Is the current webform an entity reference from the source entity.
   *
   * @return bool
   *   TRUE is the current webform an entity reference from the source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isWebformEntityReferenceFromSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24115b2f53c4982ecb22fd924042ccac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform submission\'s webform.
   *
   * @return \\Drupal\\webform\\WebformInterface
   *   A webform.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd45d6d6f4259b5bdc0346c896582a665' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getWebform',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15a220397f65f7fc4a75093b4d37fa94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform submission\'s source entity.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The webform submission\'s source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a231972da1088e2d46c794ee4e53588' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the webform submission entity storage.
   *
   * @return \\Drupal\\Webform\\WebformSubmissionStorageInterface
   *   The webform submission entity storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getStorage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a86d524b4cc5aa4321e2f44631af75ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the message manager.
   *
   * We need to wrap the message manager service because the webform submission
   * entity is being continuous cloned and updated during form processing.
   *
   * @see \\Drupal\\Core\\Entity\\EntityForm::buildEntity
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getMessageManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d25a95e7896a151fbe93ee704916670' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get source entity for use with entity limit total and user submissions.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|null
   *   The webform submission\'s source entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getLimitSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '05622f28db095f394c3cd9c62507be19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionInterface $webform_submission */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getLimitSourceEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1647be2f8e89a35433f0a63b46e845c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get last completed webform submission for the current user.
   *
   * @param bool $completed
   *   Flag to get last completed or draft submission.
   *
   * @return \\Drupal\\webform\\WebformSubmissionInterface|null
   *   The last completed webform submission for the current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getLastSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '062f551d8bc60fae4b76c34d757fedd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a webform submission\'s webform setting.
   *
   * @param string $name
   *   Setting name.
   * @param null|mixed $default_value
   *   Default value.
   *
   * @return mixed
   *   A webform setting.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'getWebformSetting',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5af61a23b9075edc61bb2c49e2c7755' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the submission form is being embedded in a share page.
   *
   * @return bool
   *   TRUE the submission form is being embedded in a share page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isSharePage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c7e6466e4284399dddaa44078f38820' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isAjax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22eb2ee334f3bb0b80c16d95d6c9f4ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'cancelAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '73266d74184078bb33bd366ed6f75deb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateAjaxForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88c4e4e875c7195f54704b7be84190a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Programmatically check that a webform is open to new submissions.
   *
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   *
   * @return array|bool
   *   Return TRUE if the webform is open to new submissions else returns
   *   an error message.
   *
   * @see \\Drupal\\webform\\WebformSubmissionForm::getCustomForm
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isOpen',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b982f3ff9680ebcddda7b6f0622f092' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isOpen',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7be8b40bc98332d7f42929d4e0d95a65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformMessageManagerInterface $message_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'isOpen',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '06f763dfbd0a947d662e3dccb66f4e7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Programmatically validate form values and submit a webform submission.
   *
   * @param array $values
   *   An array of submission form values and data.
   *
   * @return array|null
   *   An array of error messages if validation fails
   *   or NULL if there are no validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f7459ce407508107de22b6f89e4ee0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Programmatically validate form values and submit a webform submission.
   *
   * @param array $values
   *   An array of submission form values and data.
   * @param bool $validate_only
   *   Flag to trigger only webform validation. Defaults to FALSE.
   *
   * @return array|\\Drupal\\webform\\WebformSubmissionInterface|null
   *   An array of error messages if validation fails
   *   or a webform submission (when $validate_only is FALSE)
   *   or NULL (when $validate_only is TRUE) if there are no validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'submitFormValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5eb6195cb42970098972c249d450c1b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Programmatically validate and submit a webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   WebformSubmission with values and data.
   *
   * @return array|null
   *   An array of error messages if validation fails or
   *   NULL if there are no validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'validateWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '244ddee1aa22411bdbcdda6617f1aead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Programmatically validate and submit a webform submission.
   *
   * @param \\Drupal\\webform\\WebformSubmissionInterface $webform_submission
   *   WebformSubmission with values and data.
   * @param bool $validate_only
   *   Flag to trigger only webform validation. Defaults to FALSE.
   *
   * @return array|\\Drupal\\webform\\WebformSubmissionInterface|null
   *   An array of error messages if validation fails
   *   or a webform submission (when $validate_only is FALSE)
   *   or NULL (when $validate_only is TRUE) if there are no validation errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'submitWebformSubmission',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0299df4bc578566f1c09a2169bf4e269' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformSubmissionForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'webformsubmission' => 'Drupal\\webform\\Entity\\WebformSubmission',
          'webformdialogformtrait' => 'Drupal\\webform\\Form\\WebformDialogFormTrait',
          'hidden' => 'Drupal\\webform\\Plugin\\WebformElement\\Hidden',
          'optionsbase' => 'Drupal\\webform\\Plugin\\WebformElement\\OptionsBase',
          'webformcompositebase' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformCompositeBase',
          'webformelemententityreferenceinterface' => 'Drupal\\webform\\Plugin\\WebformElementEntityReferenceInterface',
          'webformelementotherinterface' => 'Drupal\\webform\\Plugin\\WebformElementOtherInterface',
          'webformelementwizardpageinterface' => 'Drupal\\webform\\Plugin\\WebformElementWizardPageInterface',
          'webformhandlerinterface' => 'Drupal\\webform\\Plugin\\WebformHandlerInterface',
          'webformsourceentitymanager' => 'Drupal\\webform\\Plugin\\WebformSourceEntityManager',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformdialoghelper' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'accessdeniedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException',
        ),
         'className' => 'Drupal\\webform\\WebformSubmissionForm',
         'functionName' => 'submitWebformSubmission',
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