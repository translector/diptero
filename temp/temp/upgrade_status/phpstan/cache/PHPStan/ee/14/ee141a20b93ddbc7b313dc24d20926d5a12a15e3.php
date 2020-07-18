<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Component/Render/PlainTextOutput.php-1594234425',
   'data' => 
  array (
    '37124f7d5da237eb0a01b0e5b5951a68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an output strategy for transforming HTML into simple plain text.
 *
 * Use this when rendering a given HTML string into a plain text string that
 * does not need special formatting, such as a label or an email subject.
 *
 * Returns a string with HTML tags stripped and HTML entities decoded suitable
 * for email or other non-HTML contexts.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Component\\Render\\PlainTextOutput',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19a83ca0175dd03408b518149d1189a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\Component\\Render\\PlainTextOutput',
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