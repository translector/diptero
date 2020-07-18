<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformHtmlHelper.php-1594690523',
   'data' => 
  array (
    'a397d74544aaadeff804fc0f9e295311' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides HTML helper functions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21435be21593bcda275bc789b02b1653' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Convert HTML markup to plain text.
   *
   * @param string $string
   *   Text that may contain HTML markup and encode characters.
   *
   * @return string
   *   Text with HTML markup removed and special characters decoded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
         'functionName' => 'toPlainText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92739de694ce05d2b02241c83d86c4fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Convert string to safe HTML markup.
   *
   * @param string $string
   *   Text to be converted to safe HTML markup.
   * @param array $html_tags
   *   An array of HTML tags.
   *
   * @return \\Drupal\\Component\\Render\\MarkupInterface|string
   *   Safe HTML markup or a plain text string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
         'functionName' => 'toHtmlMarkup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ccf3aae7ab69e3abdffd5582c8c5ecc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if a string value contains HTML markup or entities.
   *
   * @param string $string
   *   A string.
   *
   * @return bool
   *   TRUE if the string value contains HTML markup or entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
         'functionName' => 'containsHtml',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90edd82c0815608b1a4c79af444b5c6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if text has HTML (block level) tags.
   *
   * @param string $string
   *   Text that may contain HTML tags.
   *
   * @return bool
   *   TRUE is text contains HTML (block level) tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'webformhtmleditor' => 'Drupal\\webform\\Element\\WebformHtmlEditor',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformHtmlHelper',
         'functionName' => 'hasBlockTags',
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