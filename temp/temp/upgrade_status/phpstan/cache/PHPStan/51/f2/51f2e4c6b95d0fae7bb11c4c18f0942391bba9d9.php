<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformEmailConfirm.php-1594241402,/var/www/html/web/modules/contrib/webform/src/Element/WebformCompositeFormElementTrait.php-1594241402',
   'data' => 
  array (
    'c39fb899b97d6126f54c104272752b0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform element requiring users to double-element and confirm an email address.
 *
 * Formats as a pair of email addresses fields, which do not validate unless
 * the two entered email addresses match.
 *
 * @FormElement("webform_email_confirm")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '343863aec030eb7d99ab52ee4e42baf9' => 
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
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f5501a297d0b0cc88cc8999cea133a7' => 
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
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa2df9762da52de92705c500d5055c95' => 
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
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'preRenderWebformCompositeFormElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d6a95bfadd111c9071606d973b177fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f69b9fd59e3b114b336bc50f6825d164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'valueCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e54ea52a3f34d6dee99508cb7b060955' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Expand an email confirm field into two HTML5 email elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'processWebformEmailConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61ec0ce3f4e4bfcd825e2c376e0b431c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\webform\\Plugin\\WebformElementManagerInterface $element_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'processWebformEmailConfirm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeb1126b6a75308e4213154ea97f6f59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an email confirm element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'webformelementhelper' => 'Drupal\\webform\\Utility\\WebformElementHelper',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformEmailConfirm',
         'functionName' => 'validateWebformEmailConfirm',
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