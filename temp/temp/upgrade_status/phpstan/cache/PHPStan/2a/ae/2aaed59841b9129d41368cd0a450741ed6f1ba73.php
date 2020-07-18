<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/blazy/src/Utility/BlazyMarkdown.php-1588969110',
   'data' => 
  array (
    '08c0b8236aa7cbc996645fa67e22865b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides markdown utilities only useful for the help text.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markdownextra' => 'Michelf\\MarkdownExtra',
          'commonmarkconverter' => 'League\\CommonMark\\CommonMarkConverter',
        ),
         'className' => 'Drupal\\blazy\\Utility\\BlazyMarkdown',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f403ff23654cdbd2923c54afb461260f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if we have the needed classes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markdownextra' => 'Michelf\\MarkdownExtra',
          'commonmarkconverter' => 'League\\CommonMark\\CommonMarkConverter',
        ),
         'className' => 'Drupal\\blazy\\Utility\\BlazyMarkdown',
         'functionName' => 'isApplicable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0235c62db1e208129afe64e85409c26c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes Markdown text, and convert into HTML suitable for the help text.
   *
   * @param string $string
   *   The string to apply the Markdown filter to.
   * @param bool $sanitize
   *   True, if the string should be sanitized.
   *
   * @return string
   *   The filtered, or raw converted string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\blazy\\Utility',
         'uses' => 
        array (
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'markdownextra' => 'Michelf\\MarkdownExtra',
          'commonmarkconverter' => 'League\\CommonMark\\CommonMarkConverter',
        ),
         'className' => 'Drupal\\blazy\\Utility\\BlazyMarkdown',
         'functionName' => 'parse',
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