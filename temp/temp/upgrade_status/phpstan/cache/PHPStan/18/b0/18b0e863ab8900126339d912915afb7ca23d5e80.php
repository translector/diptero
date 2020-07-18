<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/modules/token_module_test/src/Controller/TokenTreeBrowseController.php-1586203134',
   'data' => 
  array (
    '616dc19ce4067ad56cbd9c5b7425c580' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Page callback to output a link.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token_module_test\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\token_module_test\\Controller\\TokenTreeBrowseController',
         'functionName' => 'outputLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2e74309aef31baa55690f084b5b6aef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Title callback for the page outputting a link.
   *
   * We are using a title callback instead of directly defining the title in the
   * routing YML file. This is so that we could return an array instead of a
   * simple string. This allows us to test if [current-page:title] works with
   * render arrays and other objects as titles.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token_module_test\\Controller',
         'uses' => 
        array (
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\token_module_test\\Controller\\TokenTreeBrowseController',
         'functionName' => 'getTitle',
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