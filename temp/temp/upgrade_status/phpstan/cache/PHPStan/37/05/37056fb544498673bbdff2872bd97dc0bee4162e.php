<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformCompositeBase.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Element/WebformCompositeFormElementTrait.php-1594241402',
   'data' => 
  array (
    '00f6b04308175637bd99f2e11dcb792f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an base composite webform element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0b7ef64f15aaab538442c8e3abb90e54' => 
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
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdb29f152cd26572704593e858882232' => 
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
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e7ca094db82639d5c0725f36ad34148' => 
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
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a8f66f94ac472be02914caabc75c7f4' => 
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
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a1120647ef8036519ada2b2fb1dd1b6' => 
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
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '720af7c51fcd1f0792e18ce9f4555770' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d1fa7e293579836e14cab3ea9c43831' => 
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
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'preRenderCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86d85149dcb2917cf932ba8204076490' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a composite webform element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'processWebformComposite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a3b86b8659d0f8c398d74362064ea47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recursively processes a composite\'s elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'processWebformCompositeElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1102abbc43f2c5f839b318845e1d34f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'processWebformCompositeElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '11e63b5bda204df4f9e36ae58c3f9d68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates a composite element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'validateWebformComposite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5f426d0002440ce0ec5985422680d10' => 
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
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'getCompositeElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1514056edc355d56327b7ee91dd5519' => 
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
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'initializeCompositeElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1000ebcb71bff8ca23db6227c8bcc4db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize a composite\'s elements recursively.
   *
   * @param array $element
   *   A render array for the current element.
   * @param array $composite_elements
   *   A render array containing a composite\'s elements.
   *
   * @throws \\Exception
   *   Throws exception when unsupported element type is used with a composite
   *   element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'initializeCompositeElementsRecursive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '858c1f5adbbe341a30a4f1689ba7e7a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformCompositeBase',
         'functionName' => 'initializeCompositeElementsRecursive',
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