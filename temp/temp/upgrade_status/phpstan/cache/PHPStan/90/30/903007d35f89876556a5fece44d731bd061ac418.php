<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/Utility/LinkitXss.php-1586214306',
   'data' => 
  array (
    'cbf7048256cddb212a4b5b73b94c4bca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Extends the default XSS protection to simplify it for Linkits needs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\linkit\\Utility\\LinkitXss',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39510ece7e407d8c4df8d2b67e9d9ba1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Description filter helper.
   *
   * @param string $string
   *   The string with raw HTML in it. It will be stripped of everything that
   *   can cause an XSS attack.
   *
   * @return string
   *   An XSS safe version of $string, or an empty string if $string is not
   *   valid UTF-8.
   *
   * @see \\Drupal\\Component\\Utility\\Xss::filter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
        ),
         'className' => 'Drupal\\linkit\\Utility\\LinkitXss',
         'functionName' => 'descriptionFilter',
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