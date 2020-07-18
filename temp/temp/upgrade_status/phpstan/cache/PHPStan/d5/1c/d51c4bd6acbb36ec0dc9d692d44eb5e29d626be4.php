<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Render/BareHtmlPageRendererInterface.php-1594234425',
   'data' => 
  array (
    '465012e34ba093d2c8c806f5080c218c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Bare HTML page renderer.
 *
 * By "bare HTML page", we mean that the following hooks that allow for "normal"
 * pages are not invoked:
 * - hook_page_attachments()
 * - hook_page_attachments_alter()
 * - hook_page_top()
 * - hook_page_bottom()
 *
 * Examples of bare HTML pages are:
 * - install.php
 * - update.php
 * - authorize.php
 * - maintenance mode
 * - exception handlers
 *
 * i.e. use this when rendering HTML pages in limited environments. Otherwise,
 * use a @code _controller @endcode route, and return a render array.
 * This will cause a main content renderer
 * (\\Drupal\\Core\\Render\\MainContent\\MainContentRendererInterface) to be
 * used, and in case of a HTML request that will be
 * \\Drupal\\Core\\Render\\MainContent\\HtmlRenderer.
 *
 * In fact, this is not only *typically* used in a limited environment, it even
 * *must* be used in a limited environment: when using the bare HTML page
 * renderer, use as little state/additional services as possible, because the
 * same safeguards aren\'t present (precisely because this is intended to be used
 * in a limited environment).
 *
 * Currently, there are two types of bare pages available:
 * - Install (hook_preprocess_install_page(), install-page.html.twig).
 * - Maintenance (hook_preprocess_maintenance_page(),
 *   maintenance-page.html.twig).
 *
 * @see \\Drupal\\Core\\Render\\MainContent\\HtmlRenderer
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e70c1cae7de2d0b37acff7e9d1733a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a bare page.
   *
   * @param array $content
   *   The main content to render in the \'content\' region.
   * @param string $title
   *   The title for this maintenance page.
   * @param string $page_theme_property
   *   The #theme property to set on #type \'page\'.
   * @param array $page_additions
   *   Additional regions to add to the page. May also be used to pass the
   *   #show_messages property for #type \'page\'.
   *
   * @return \\Drupal\\Core\\Render\\HtmlResponse
   *   The rendered HTML response, ready to be sent.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\BareHtmlPageRendererInterface',
         'functionName' => 'renderBarePage',
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