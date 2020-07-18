<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/TextFormat.php-1594690523',
   'data' => 
  array (
    'da2ab14bf821b4917d3a6e1524679d6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a \'text_format\' element.
 *
 * @WebformElement(
 *   id = "text_format",
 *   api = "https://api.drupal.org/api/drupal/core!modules!filter!src!Element!TextFormat.php/class/TextFormat",
 *   label = @Translation("Text format"),
 *   description = @Translation("Provides a text format form element."),
 *   category = @Translation("Advanced elements"),
 *   states_wrapper = TRUE,
 *   composite = TRUE,
 *   multiline = TRUE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22dcb27df5a132f1592b71269e53f92f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f23129436e58dab23da84d7b057a5631' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'isInput',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd92a27367be00fabe04eadd2730b205c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '84abdeb705e4da0876a83c168970dc3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fix text format #more property.
   *
   * @param array $element
   *   The form element to process. See main class documentation for properties.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The form element.
   *
   * @see template_preprocess_text_format_wrapper()
   * @see text-format-wrapper.html.twig
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'process',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5a51531fe58a74b167edd7d0559cb17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alter the \'text_format\' element after it has been built.
   *
   * @param array $element
   *   An element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'afterBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5588220cb0f6153a92bfa2f50ccca111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set an elements #states and flexbox wrapper.
   *
   * @param array $element
   *   An element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'prepareWrapper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '603c773433837ccb8218b296390e8644' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fix state .js-webform-states-hidden wrapper for text format element.
   *
   * Adds .js-webform-states-hidden to wrapper to text format because
   * text format\'s wrapper is hard-coded.
   *
   * @param array $element
   *   An element.
   *
   * @return array
   *   An element with .js-webform-states-hidden added to the #prefix
   *   and #suffix.
   *
   * @see \\Drupal\\webform\\Utility\\WebformElementHelper::fixStatesWrapper
   * @see text-format-wrapper.html.twig
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'preRenderFixTextFormatStates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc66d57fc5b34456759f7163f4872a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritDoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'trustedCallbacks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2be90653ad345adef08e6f3915b03ef7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'setDefaultValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '899c8b8c85bcf178df4be0b385f4a7e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'formatHtmlItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '04b6321c3988a89ce3484368d2be866c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'formatTextItem',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3b396aa9a81e03a48a4d900855428eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'getItemFormats',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e86208ac89dc7b8087878b177448531' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'buildExportRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '79ee7720c9fae1e9ff4ef4c32e53f08c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'getElementSelectorInputsOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c3147872250cf4045f244a21d81f929f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'preview',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7799ff0896f6e59a27253820b1c6ec0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '489a3495cec86c1fd11a583435282114' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f96a3f80e968e084779f76e10448fee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9dfb774e3b3d1b9a305b1e62525b138' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'postDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e262f40986b221603c2165cf69aa06a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if composite element exists.
   *
   * @return bool
   *   TRUE if composite element exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'mailformathelper' => 'Drupal\\Core\\Mail\\MailFormatHelper',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'user' => 'Drupal\\user\\Entity\\User',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\TextFormat',
         'functionName' => 'hasCompositeElement',
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