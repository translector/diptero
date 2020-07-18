<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_example_remote_post/src/Controller/WebformExampleRemotePostController.php-1594690523',
   'data' => 
  array (
    '97a71ed08ddf3355a45377da2d95820d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides route responses for example remote post.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_example_remote_post\\Controller',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform_example_remote_post\\Controller\\WebformExampleRemotePostController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '800fc42fe2def8550dea68bfcde603e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a remote post response.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   * @param string $type
   *   Type of remote post request (completed, updated, or deleted)
   *
   * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
   *   A JSON response with request status and message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_example_remote_post\\Controller',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\webform_example_remote_post\\Controller\\WebformExampleRemotePostController',
         'functionName' => 'index',
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