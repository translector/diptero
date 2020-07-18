<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Theme/ThemeNegotiatorInterface.php-1594234425',
   'data' => 
  array (
    '51d16741c595c0f300e70c0b8abddc77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for classes which determine the active theme.
 *
 * To set the active theme, create a new service tagged with \'theme_negotiator\'
 * (see the theme.negotiator.admin_theme service in user.services.yml for an
 * example). Your service class needs to implement this interface.
 *
 * If you are setting a theme which is closely tied to the functionality of a
 * particular page or set of pages (such that the page might not function
 * correctly if a different theme is used), make sure to set the priority on
 * the service to a high number so that it is not accidentally overridden by
 * other theme negotiators. By convention, a priority of "1000" is used in
 * these cases; see \\Drupal\\Core\\Theme\\AjaxBasePageNegotiator and
 * core.services.yml for an example.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeNegotiatorInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00ab1eb4a78ffb9aa18ef1985a765534' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this theme negotiator should be used to set the theme.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match object.
   *
   * @return bool
   *   TRUE if this negotiator should be used or FALSE to let other negotiators
   *   decide.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeNegotiatorInterface',
         'functionName' => 'applies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5fa3b7dfdad6e58417ca99c9140280a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine the active theme for the request.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match object.
   *
   * @return string|null
   *   The name of the theme, or NULL if other negotiators, like the configured
   *   default one, should be used instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeNegotiatorInterface',
         'functionName' => 'determineActiveTheme',
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