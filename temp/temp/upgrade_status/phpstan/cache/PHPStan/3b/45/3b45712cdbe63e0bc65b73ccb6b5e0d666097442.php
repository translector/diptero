<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_options_custom/src/Controller/WebformOptionsCustomController.php-1594690523',
   'data' => 
  array (
    '23fc330af83f758d62271e77ba899c81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides route responses for webform options custom.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Controller',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform_options_custom\\Controller\\WebformOptionsCustomController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bb210717c3c8d03fa4274ce1c323ce9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns response for the webform options custom autocompletion.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request object containing the search string.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
   *   A JSON response containing the autocomplete suggestions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_options_custom\\Controller',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform_options_custom\\Controller\\WebformOptionsCustomController',
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