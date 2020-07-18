<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformXss.php-1594690523',
   'data' => 
  array (
    '4a04de8c2d5828e77989518ebbdd2889' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides webform helper to filter for cross-site scripting.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformXss',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '669f866e398816080fdb96e3ece2a775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the list of HTML tags allowed by Xss::filterAdmin() with missing <label>, <fieldset>, <legend>, <font> tags.
   *
   * @return array
   *   The list of HTML tags allowed by filterAdmin() with missing
   *   <label>, <fieldset>, <legend>, <font> tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformXss',
         'functionName' => 'getAdminTagList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c640b19abe491f2837e609a4d9405d58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the standard list of HTML tags allowed by Xss::filter() with missing <font> tag.
   *
   * @return array
   *   The list of HTML tags allowed by Xss::filter() with missing <font> tag.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformXss',
         'functionName' => 'getHtmlTagList',
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