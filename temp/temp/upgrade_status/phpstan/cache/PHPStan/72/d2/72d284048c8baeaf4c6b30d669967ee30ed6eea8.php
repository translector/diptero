<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/src/Element/ParagraphsActions.php-1590060906',
   'data' => 
  array (
    '00d474f3b59ffc72cde69e9fe3b9a691' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element for a paragraphs actions.
 *
 * Paragraphs actions can have two type of actions
 * - actions - this are default actions that are always visible.
 * - dropdown_actions - actions that are in dropdown sub component.
 *
 * Usage example:
 *
 * @code
 * $form[\'actions\'] = [
 *   \'#type\' => \'paragraphs_actions\',
 *   \'actions\' => $actions,
 *   \'dropdown_actions\' => $dropdown_actions,
 * ];
 * $dropdown_actions[\'button\'] = array(
 *   \'#type\' => \'submit\',
 * );
 * @endcode
 *
 * @FormElement("paragraphs_actions")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Element',
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
        ),
         'className' => 'Drupal\\paragraphs\\Element\\ParagraphsActions',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c72801d07339440d65dc208f047a131a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Element',
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
        ),
         'className' => 'Drupal\\paragraphs\\Element\\ParagraphsActions',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d135daf75284a71ef8a60c2c172ae3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pre render callback for #type \'paragraphs_actions\'.
   *
   * @param array $element
   *   Element arrar of a #type \'paragraphs_actions\'.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\paragraphs\\Element',
         'uses' => 
        array (
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
        ),
         'className' => 'Drupal\\paragraphs\\Element\\ParagraphsActions',
         'functionName' => 'preRenderParagraphsActions',
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