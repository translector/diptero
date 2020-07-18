<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/WebformTokenManagerInterface.php-1594690523',
   'data' => 
  array (
    'bdf12651577dba2023891d8f7519b150' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for token manager classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManagerInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '931877392347eac7d2c856fba322c479' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace tokens in text.
   *
   * @param string|array $text
   *   A string of text that may contain tokens.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   A Webform or Webform submission entity.
   * @param array $data
   *   (optional) An array of keyed objects.
   * @param array $options
   *   (optional) A keyed array of settings and flags to control the token
   *   replacement process. Supported options are:
   *   - langcode: A language code to be used when generating locale-sensitive
   *     tokens.
   *   - callback: A callback function that will be used to post-process the
   *     array of token replacements after they are generated.
   *   - clear: A boolean flag indicating that tokens should be removed from the
   *     final text if no replacement value can be generated.
   * @param \\Drupal\\Core\\Render\\BubbleableMetadata|null $bubbleable_metadata
   *   (optional) An object to which static::generate() and the hooks and
   *   functions that it invokes will add their required bubbleable metadata.
   *
   * @return string|array
   *   Text or array with tokens replaced.
   *
   * @see \\Drupal\\Core\\Utility\\Token::replace
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManagerInterface',
         'functionName' => 'replace',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22f5c1d3fd8c2eb4efa8e04d57d64a2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replace tokens in text with no render context.
   *
   * This method allows tokens to be replaced when there is no render context
   * via REST and JSON API requests.
   *
   * @param string|array $text
   *   A string of text that may contain tokens.
   * @param \\Drupal\\Core\\Entity\\EntityInterface|null $entity
   *   A Webform or Webform submission entity.
   * @param array $data
   *   (optional) An array of keyed objects.
   * @param array $options
   *   (optional) A keyed array of settings and flags to control the token
   *   replacement process. Supported options are:
   *   - langcode: A language code to be used when generating locale-sensitive
   *     tokens.
   *   - callback: A callback function that will be used to post-process the
   *     array of token replacements after they are generated.
   *   - clear: A boolean flag indicating that tokens should be removed from the
   *     final text if no replacement value can be generated.
   *
   * @return string|array
   *   Text or array with tokens replaced.
   *
   * @see \\Drupal\\Core\\Utility\\Token::replace
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManagerInterface',
         'functionName' => 'replaceNoRenderContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '959ad2262219f430f3d6e07f588e69ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build token tree link if token.module is installed.
   *
   * @param array $token_types
   *   An array containing token types that should be shown in the tree.
   *
   * @return array
   *   A render array containing a token tree link.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManagerInterface',
         'functionName' => 'buildTreeLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b958049ea286b4e362d04f071f4d6cf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build token tree element if token.module is installed.
   *
   * @param array $token_types
   *   An array containing token types that should be shown in the tree.
   * @param string $description
   *   (optional) Description to appear after the token tree link.
   *
   * @return array
   *   A render array containing a token tree link wrapped in a div.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManagerInterface',
         'functionName' => 'buildTreeElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a791475f5da1f582abbaea2a27f14cf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate form that should have tokens in it.
   *
   * @param array $form
   *   A form.
   * @param array $token_types
   *   An array containing token types that should be validated.
   *
   * @see token_element_validate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
        ),
         'className' => 'Drupal\\webform\\WebformTokenManagerInterface',
         'functionName' => 'elementValidate',
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