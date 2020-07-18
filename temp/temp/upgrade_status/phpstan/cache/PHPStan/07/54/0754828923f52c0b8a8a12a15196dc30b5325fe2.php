<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/RenderContext.php-1594234425',
   'data' => 
  array (
    '1357f5b94a11baf2dae4f3c3dce829a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The render context: a stack containing bubbleable rendering metadata.
 *
 * A stack of \\Drupal\\Core\\Render\\BubbleableMetadata objects.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface
 * @see \\Drupal\\Core\\Render\\Renderer
 * @see \\Drupal\\Core\\Render\\BubbleableMetadata
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\RenderContext',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35c9ade8bf41aea6e68cf1114b9d2ffc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the current frame of the stack.
   *
   * @param array &$element
   *   The element of the render array that has just been rendered. The stack
   *   frame for this element will be updated with the bubbleable rendering
   *   metadata of this element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\RenderContext',
         'functionName' => 'update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1528dbb60a50bd46549cc1140c6ada77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Bubbles the stack.
   *
   * Whenever another level in the render array has been rendered, the stack
   * must be bubbled, to merge its rendering metadata with that of the parent
   * element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\RenderContext',
         'functionName' => 'bubble',
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