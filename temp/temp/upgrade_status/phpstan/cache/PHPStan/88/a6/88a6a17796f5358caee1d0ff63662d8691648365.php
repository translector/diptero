<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Element/WebformSignature.php-1594241402',
   'data' => 
  array (
    '524b7cf08511f191addc118cd37d9adb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a webform element for entering a signature.
 *
 * @FormElement("webform_signature")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a73a15f2a9260d8ae082bf69cc2988bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '788aff99b1cd115326d9028fb352ff74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a signature webform element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => 'processWebformSignature',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dc34d77edbd389a6b800d898cca383db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a #type \'webform_signature\' render element for input.html.twig.
   *
   * @param array $element
   *   An associative array containing the properties of the element.
   *   Properties used: #title, #value, #description, #min, #max, #attributes,
   *   #step.
   *
   * @return array
   *   The $element with prepared variables ready for input.html.twig.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => 'preRenderWebformSignature',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2e915b2e719401884c9543b0bf0d4ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Webform element validation handler for #type \'signature\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => 'validateWebformSignature',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eeaad5e3afb9a30d3f23fadb709689c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine that signature PNG is valid.
   *
   * @param string $value
   *   Upload base64 png image.
   *
   * @return bool
   *   TRUE if signature PNG is valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => 'isSignatureValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a231f593bc90e1746b36ea4a9ce2ddde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\webform\\Element\\WebformSignature',
         'functionName' => 'isSignatureValid',
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