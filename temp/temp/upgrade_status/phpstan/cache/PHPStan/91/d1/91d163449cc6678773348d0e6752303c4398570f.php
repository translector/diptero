<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformOtherBase.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Element/WebformCompositeFormElementTrait.php-1594241402',
   'data' => 
  array (
    '21688b5adc95182bf3459b75634bcca0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for webform other element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11b73403bbaefcd4b3c3768a875cfe92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for webform composite form elements.
 *
 * Any form element that is comprised of several distinct parts can use this
 * trait to add support for a composite title or description.
 *
 * The Webform overrides any element that is using the CompositeFormElementTrait
 * and applies the below pre renderer which adds support for
 * #wrapper_attributes and additional some classes.
 *
 * @see \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait
 * @see \\Drupal\\webform\\Plugin\\WebformElementBase::prepareCompositeFormElement
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'element' => 'Drupal\\Core\\Render\\Element',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9affc8803cf1ee590a812a9395709c20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds form element theming to an element if its title or description is set.
   *
   * This is used as a pre render function for checkboxes and radios.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'element' => 'Drupal\\Core\\Render\\Element',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '898e29663ea515ebae0d745d16d208b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'element' => 'Drupal\\Core\\Render\\Element',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b911424f4538154516fb5312724e9398' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Other option value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a55717957feff133eb939d9bc738de50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The type of element.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '93079d398ee6de1571e122538d6abf55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The properties of the element.
   *
   * @var array
   *
   * @see \\Drupal\\webform\\Element\\WebformSelectOther::$properties
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97716a4a445b7d8ef83a727d7c63e916' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The properties of the other element.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be57dde21d1447aea00ec72f0909a2fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '59f1b7f05a302c770649028417be8cb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecb292e30763c4c419c8285775dd6378' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes an \'other\' element.
   *
   * See select list webform element for select list properties.
   *
   * @see \\Drupal\\Core\\Render\\Element\\Select
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'processWebformOther',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2c6b071dfba69eaf1dfb1ee4ea41f643' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'processWebformOther',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fc9ceb42c3f4d7b60be9ac206e1bfd11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an other element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'validateWebformOther',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2e1f900131bd007896732cd8e13ae9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processed other element\'s submitted value.
   *
   * @param array $element
   *   The element.
   * @param array $value
   *   The submitted value.
   *
   * @return array|string
   *   An array of values or a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'processValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56b044c62aaf26d7b058949f88e0880e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the element type.
   *
   * @return string
   *   The element type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'getElementType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5beeb5cc4a2d3df3c3316412aaea08e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the webform element contains multiple values.
   *
   * @param array $element
   *   A webform element.
   *
   * @return bool
   *   TRUE if the webform element contains multiple values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'isMultiple',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b2aab928dec67adae97a8523243c6e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Convert default value to element value.
   *
   * @param array $element
   *   A other form element.
   *
   * @return array
   *   An associative array container (element) type and other value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformOtherBase',
         'functionName' => 'convertDefaultValueToElementValue',
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