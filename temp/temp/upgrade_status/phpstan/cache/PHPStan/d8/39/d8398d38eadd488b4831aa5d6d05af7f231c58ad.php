<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Controller/WebformElementController.php-1594241402',
   'data' => 
  array (
    'f8e1413179911bf4ce4cdb4900b5d683' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides route responses for Webform elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformElementController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '697f0d3c4806b949cf1a326347a19f34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns response for message close using user or state storage.
   *
   * @param string $storage
   *   Mechanism that the message state should be stored in, user or state.
   * @param string $id
   *   The unique id of the message.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   An empty Ajax response.
   *
   * @throws \\Exception
   *   Throws exception is storage is not set to \'user\' or \'state\'.
   *
   * @see \\Drupal\\webform\\Element\\WebformMessage::setClosed
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformElementController',
         'functionName' => 'close',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acab9da7d675dea780c1f2c5e6f3d356' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns response for the element autocomplete route.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request object containing the search string.
   * @param \\Drupal\\webform\\WebformInterface $webform
   *   A webform.
   * @param string $key
   *   Webform element key.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
   *   A JSON response containing the autocomplete suggestions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformElementController',
         'functionName' => 'autocomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd17f463630e6c9f1f54777f2d31547d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get matches from existing submission values.
   *
   * @param string $q
   *   String to filter option\'s label by.
   * @param string $webform_id
   *   The webform id.
   * @param string $key
   *   The element\'s key.
   * @param string $operator
   *   Match operator either CONTAINS or STARTS_WITH.
   * @param int $limit
   *   Limit number of matches.
   *
   * @return array
   *   An array of matches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformElementController',
         'functionName' => 'getMatchesFromExistingValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '10b056ba6ded01d39c290eeaa97e5c93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get matches from options.
   *
   * @param string $q
   *   String to filter option\'s label by.
   * @param array $options
   *   An associative array of webform options.
   * @param string $operator
   *   Match operator either CONTAINS or STARTS_WITH.
   * @param int $limit
   *   Limit number of matches.
   *
   * @return array
   *   An array of matches sorted by label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformElementController',
         'functionName' => 'getMatchesFromOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0cac85da76060273b18a49a19b2221f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get matches from options recursive.
   *
   * @param string $q
   *   String to filter option\'s label by.
   * @param array $options
   *   An associative array of webform options.
   * @param array $matches
   *   An associative array of autocomplete matches.
   * @param string $operator
   *   Match operator either CONTAINS or STARTS_WITH.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Controller',
         'uses' => 
        array (
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'database' => 'Drupal\\Core\\Database\\Database',
          'webformmessage' => 'Drupal\\webform\\Element\\WebformMessage',
          'webformoptions' => 'Drupal\\webform\\Entity\\WebformOptions',
          'webforminterface' => 'Drupal\\webform\\WebformInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform\\Controller\\WebformElementController',
         'functionName' => 'getMatchesFromOptionsRecursive',
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