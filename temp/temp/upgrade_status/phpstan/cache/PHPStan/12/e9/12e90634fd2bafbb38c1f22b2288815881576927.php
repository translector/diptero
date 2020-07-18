<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Container.php-1594234425',
   'data' => 
  array (
    'b54024e1af3f62489afbd29cf192bbe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element that wraps child elements in a container.
 *
 * Surrounds child elements with a <div> and adds attributes such as classes or
 * an HTML ID.
 *
 * Properties:
 * - #optional: Indicates whether the container should render when it has no
 *   visible children. Defaults to FALSE.
 *
 * Usage example:
 * @code
 * $form[\'needs_accommodation\'] = [
 *   \'#type\' => \'checkbox\',
 *   \'#title\' => $this->t(\'Need Special Accommodations?\'),
 * ];
 *
 * $form[\'accommodation\'] = [
 *   \'#type\' => \'container\',
 *   \'#attributes\' => [
 *     \'class\' => [\'accommodation\'],
 *   ],
 *   \'#states\' => [
 *     \'invisible\' => [
 *       \'input[name="needs_accommodation"]\' => [\'checked\' => FALSE],
 *     ],
 *   ],
 * ];
 *
 * $form[\'accommodation\'][\'diet\'] = [
 *   \'#type\' => \'textfield\',
 *   \'#title\' => $this->t(\'Dietary Restrictions\'),
 * ];
 * @endcode
 *
 * @RenderElement("container")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Container',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52a5f00afaac608a7a64b2b68d88a5b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Container',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf526ea75de9ae9c820c1548115a832a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes a container element.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   container.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Container',
         'functionName' => 'processContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e9c13af72dc40fbaa3fd856aeca307f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents optional containers from rendering if they have no children.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   container.
   *
   * @return array
   *   The modified element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Container',
         'functionName' => 'preRenderContainer',
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