<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Logger/LogMessageParserInterface.php-1594234425',
   'data' => 
  array (
    '6ffa53c32dcd0d50f8bf8e4155480173' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for parsing log messages and their placeholders.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Logger\\LogMessageParserInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c10954d51e39b21ee069adbb9a7238e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses and transforms message and its placeholders to a common format.
   *
   * For a value to be considered as a placeholder should be in the following
   * formats:
   *   - @link https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md#12-message The PSR3 format @endlink
   *   - The Drupal specific string placeholder format, described in
   *     \\Drupal\\Component\\Render\\FormattableMarkup
   *
   * Values in PSR3 format will be transformed to
   * \\Drupal\\Component\\Render\\FormattableMarkup format.
   *
   * @param string $message
   *   The message that contains the placeholders.
   *   If the message is in PSR3 style, it will be transformed to
   *   \\Drupal\\Component\\Render\\FormattableMarkup style.
   * @param array $context
   *   An array that may or may not contain placeholder variables.
   *
   * @return array
   *   An array of the extracted message placeholders.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Logger\\LogMessageParserInterface',
         'functionName' => 'parseMessagePlaceholders',
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