<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/src/TreeBuilderInterface.php-1586203134',
   'data' => 
  array (
    '9c1b2b57935903384a0c30b012c054bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum depth for token tree recursion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TreeBuilderInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeabfbb1990ce2b6e8503cf4e9b57335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a tree array of tokens used for themeing or information.
   *
   * @param string $token_type
   *   The token type.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'flat\' (defaults to FALSE): Set to true to generate a flat list of
   *     token information. Otherwise, child tokens will be inside the
   *     \'children\' parameter of a token.
   *   - \'restricted\' (defaults to FALSE): Set to true to how restricted tokens.
   *   - \'depth\' (defaults to 4): Maximum number of token levels to recurse.
   *
   * @return array
   *   The token information constructed in a tree or flat list form depending
   *   on $options[\'flat\'].
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TreeBuilderInterface',
         'functionName' => 'buildTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bf2abc040fdc76f210faccee186f2e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flatten a token tree.
   *
   * @param array $tree
   *   The tree array as returned by TreeBuilderInterface::buildTree().
   *
   * @return array
   *   The flattened version of the tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TreeBuilderInterface',
         'functionName' => 'flattenTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3ead3be1f40d56eb6e74eadbf1124734' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a render array with token tree built as per specified options.
   *
   * @param array $token_types
   *   An array containing token types that should be shown in the tree.
   * @param array $options
   *   (optional) An associative array to control which tokens are shown and
   *   how. The properties available are:
   *   - \'global_types\' (defaults to TRUE): Show all global token types along
   *     with the specified types.
   *   - \'click_insert\' (defaults to TRUE): Include classes and caption to show
   *     allow inserting tokens in fields by clicking on them.
   *   - \'show_restricted\' (defaults to FALSE): Show restricted tokens in the
   *     tree.
   *   - \'show_nested\' (defaults to FALSE): If this token is nested and should
   *     therefor not show on the token browser as a top level token.
   *   - \'recursion_limit\' (defaults to 3): Only show tokens up to the specified
   *     depth.
   *
   * @return array
   *   Render array for the token tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TreeBuilderInterface',
         'functionName' => 'buildRenderable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b071c7853fe2eb4f9c440c221b9e137' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build a render array with token tree containing all possible tokens.
   *
   * @param array $options
   *   (optional) An associative array to control which tokens are shown and
   *   how. The properties available are: See
   *   \\Drupal\\token\\TreeBuilderInterface::buildRenderable() for details.
   *
   * @return array
   *   Render array for the token tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\token',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\token\\TreeBuilderInterface',
         'functionName' => 'buildAllRenderable',
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