<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Controller/WebformOptionsController.php-1594241402',
   'data' => 
  array (
    '4bbedfb24803a2b931d3152b1c89e98d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides route responses for Webform options.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformOptionsController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3761dca0edde21242d759d7d0e3a65f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns response for the webform options autocompletion.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request object containing the search string.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
   *   A JSON response containing the autocomplete suggestions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformOptionsController',
         'functionName' => 'autocomplete',
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