<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_custom/src/Element/WebformOptionsCustom.php-1594690523,/var/www/html/web/modules/contrib/webform/src/Element/WebformCompositeFormElementTrait.php-1594241402',
   'data' => 
  array (
    '3b9e9f52568347996004a145efaf6b90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an element for a selecting custom options from HTML or SVG markup.
 *
 * @FormElement("webform_options_custom")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '026dfa6ce5b1ad43ef011e0b35bcacfa' => 
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
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12b959e58df490dc91e64ecf9e1904a2' => 
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
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e12ce0c5d6a0a976cc3acee5de171097' => 
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
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f437ce7ddcb0749d7a4ac7215bd6db6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The properties of the element.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a894e57fe59a1942c11bc6899e12435a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f685d59f3267390999183419ee3689a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '522b668612de95e81dded0349738d3fc' => 
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
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'processWebformOptionsCustom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1095b44a3d2c22f3fcc530fad5dd0a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'processWebformOptionsCustom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c26db9229ddc1d6a46d5e0f8cc7fead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an other element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'validateWebformOptionsCustom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e6fb3430fa8fc171b8bcc9cda0d46c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a custom options element #options property.
   *
   * @param array $element
   *   A custom options element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'setOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d20ade744ed335fbe2b1ee7149726d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a custom options element #options property.
   *
   * @param array $element
   *   A custom options element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'setTemplateOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3bf7f91facbfb459c649f9a853b3d698' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\DOMNode $attribute_node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Element',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformcompositeformelementtrait' => 'Drupal\\webform\\Element\\WebformCompositeFormElementTrait',
          'webformarrayhelper' => 'Drupal\\webform\\Utility\\WebformArrayHelper',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
          'webformformhelper' => 'Drupal\\webform\\Utility\\WebformFormHelper',
          'webformoptionshelper' => 'Drupal\\webform\\Utility\\WebformOptionsHelper',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
          'webformoptionscustomentity' => 'Drupal\\webform_options_custom\\Entity\\WebformOptionsCustom',
        ),
         'className' => 'Drupal\\webform_options_custom\\Element\\WebformOptionsCustom',
         'functionName' => 'setTemplateOptions',
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