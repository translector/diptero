<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformVariant.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Plugin/WebformElement/WebformDisplayOnTrait.php-1594690523',
   'data' => 
  array (
    'd074f145b08a0a861496f63d913ecba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a \'webform_variant\' element.
 *
 * @WebformElement(
 *   id = "webform_variant",
 *   label = @Translation("Variant [EXPERIMENTAL]"),
 *   description = @Translation("Provides a form element for enabling and tracking webform variants."),
 *   category = @Translation("Advanced elements"),
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff0d3032d6b985b34bd4c3c7afe8d3be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an \'display_on\' trait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '962ffd34a44330d1b2bf23c7f86a576e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '38396184a7ee2cc4954d955c9a39238b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'buildHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c6b38cf975341e24971b995eccae853' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'buildText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a80862a96338b300720f224f56b6d7af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check is the element is display on form, view, or both.
   *
   * @param array $element
   *   An element.
   * @param string $display_on
   *   Display on form or view.
   *
   * @return bool
   *   TRUE if the element should be displayed on the form or view.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'isDisplayOn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7c26245a91b1766a4b71b6c4a13bf5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get display on options.
   *
   * @param bool $none
   *   If TRUE none is include.
   *
   * @return array
   *   An associative array of display on options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'getDisplayOnOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1390d2b2463521a6b535aa21220a9580' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'defineDefaultProperties',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a3c789e037bb894ad80c935069766d3' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'isHidden',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18a1762080155682cf93cd98b6bd7c2d' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'initialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f96a5e50f46ed854e395fb5e885bc94' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a635f1366cc12f36a8de8d9cecb6ae9a' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'buildHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa646fe91819f2301a9d981e2c1b2164' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'buildText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1764d29fa31a542085be8e9231cb2ac3' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '988bd2464f137d1d51fee12d4913dab1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform_ui\\Form\\WebformUiElementFormBase $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de25a0c940e842667ab882e0c25f1096' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\WebformInterface $webform */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88b14b6fe705b13f84066cfb286998f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformVariantManagerInterface $variant_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f113d7be7a1c38ab2322b20bfd2c6062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformVariantInterface $variant_plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'form',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f82861ed8ab86e678b088a4deb41d873' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * After build handler for variant element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Plugin\\WebformElement',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementbase' => 'Drupal\\webform\\Plugin\\WebformElementBase',
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'afterBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a3f552710836652c6f1f4adc03afbbf' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'getTestValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9c83f52f25c69ef9565a397ab60216a' => 
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
          'webformelementvariantinterface' => 'Drupal\\webform\\Plugin\\WebformElementVariantInterface',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'webformelementdisplayoninterface' => 'Drupal\\webform\\Plugin\\WebformElementDisplayOnInterface',
          'webformsubmissioninterface' => 'Drupal\\webform\\WebformSubmissionInterface',
        ),
         'className' => 'Drupal\\webform\\Plugin\\WebformElement\\WebformVariant',
         'functionName' => 'getElementSelectorOptions',
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