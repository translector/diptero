<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/Element/Dropbutton.php-1594234425',
   'data' => 
  array (
    '45b6a60cc29fde420338e6982eec4f5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a render element for a set of links rendered as a drop-down button.
 *
 * By default, this element sets #theme so that the \'links\' theme hook is used
 * for rendering, with suffixes so that themes can override this specifically
 * without overriding all links theming. If the #subtype property is provided in
 * your render array with value \'foo\', #theme is set to links__dropbutton__foo;
 * if not, it\'s links__dropbutton; both of these can be overridden by setting
 * the #theme property in your render array. See template_preprocess_links()
 * for documentation on the other properties used in theming; for instance, use
 * element property #links to provide $variables[\'links\'] for theming.
 *
 * Properties:
 * - #links: An array of links to actions. See template_preprocess_links() for
 *   documentation the properties of links in this array.
 * - #dropbutton_type: A string defining a type of dropbutton variant for
 *   styling proposes. Renders as class `dropbutton--#dropbutton_type`.
 *
 * Usage Example:
 * @code
 * $form[\'actions\'][\'extra_actions\'] = array(
 *   \'#type\' => \'dropbutton\',
 *   \'#dropbutton_type\' => \'small\',
 *   \'#links\' => array(
 *     \'simple_form\' => array(
 *       \'title\' => $this->t(\'Simple Form\'),
 *       \'url\' => Url::fromRoute(\'fapi_example.simple_form\'),
 *     ),
 *     \'demo\' => array(
 *       \'title\' => $this->t(\'Build Demo\'),
 *       \'url\' => Url::fromRoute(\'fapi_example.build_demo\'),
 *     ),
 *   ),
 * );
 * @endcode
 *
 * @see \\Drupal\\Core\\Render\\Element\\Operations
 *
 * @RenderElement("dropbutton")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Dropbutton',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c4b35f606c473ba38a9ac3f95e2d2e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Dropbutton',
         'functionName' => 'getInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fb79dda670f22a60904a3fb345d1562' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pre-render callback: Attaches the dropbutton library and required markup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\Dropbutton',
         'functionName' => 'preRenderDropbutton',
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