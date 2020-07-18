<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Render/OutputStrategyInterface.php-1594234425',
   'data' => 
  array (
    'e92419a25797c2e1b80b8618a6852fe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an output strategy that formats HTML strings for a given context.
 *
 * Output strategies assist in transforming HTML strings into strings that are
 * appropriate for a given context (e.g. plain-text), through performing the
 * relevant formatting. No sanitization is applied.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Render\\OutputStrategyInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf433c1c7f9aae7965669abe0bdf1158' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Transforms a given HTML string into to a context-appropriate output string.
   *
   * This transformation consists of performing the formatting appropriate to
   * a given output context (e.g., plain-text email subjects, HTML attribute
   * values).
   *
   * @param string|object $string
   *   An HTML string or an object with a ::__toString() magic method returning
   *   HTML markup. The source HTML markup is considered ready for output into
   *   HTML fragments and thus already properly escaped and sanitized.
   *
   * @return string
   *   A new string that is formatted according to the output strategy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Render\\OutputStrategyInterface',
         'functionName' => 'renderFromHtml',
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