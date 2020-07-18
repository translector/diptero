<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Functional/TokenTestTrait.php-1586203134,/var/www/html/web/core/tests/Drupal/Tests/Traits/Core/PathAliasTestTrait.php-1594234425',
   'data' => 
  array (
    '78e3743fd21cf03c1661c45c500fb091' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper test trait with some added functions for testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'pathaliastesttrait' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c022bc48e7f6856431cbb48c6128eb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create and assert path_alias entities.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3978ca5949e63a3622a2ec1b82009fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new path alias.
   *
   * @param string $path
   *   The system path.
   * @param string $alias
   *   The alias for the system path.
   * @param string $langcode
   *   (optional) A language code for the path alias. Defaults to
   *   \\Drupal\\Core\\Language\\LanguageInterface::LANGCODE_NOT_SPECIFIED.
   *
   * @return \\Drupal\\path_alias\\PathAliasInterface
   *   A path alias entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => 'createPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f5f29cec64d76bf0ca7e699555d49d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\path_alias\\PathAliasInterface $path_alias */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => 'createPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '790f6eb4a1c671b50cd10c765360542f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the first result from a \'load by properties\' storage call.
   *
   * @param array $conditions
   *   An array of query conditions.
   *
   * @return \\Drupal\\path_alias\\PathAliasInterface|null
   *   A path alias entity or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => 'loadPathAliasByConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2f5b03f492ab3fa7a6a4da6610e180a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a path alias exists in the storage.
   *
   * @param string $alias
   *   The path alias.
   * @param string|null $langcode
   *   (optional) The language code of the path alias.
   * @param string|null $path
   *   (optional) The system path of the path alias.
   * @param string|null $message
   *   (optional) A message to display with the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => 'assertPathAliasExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ded95424cb74c5f0a32594c8f27700a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a path alias does not exist in the storage.
   *
   * @param string $alias
   *   The path alias.
   * @param string|null $langcode
   *   (optional) The language code of the path alias.
   * @param string|null $path
   *   (optional) The system path of the path alias.
   * @param string|null $message
   *   (optional) A message to display with the assertion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => 'assertPathAliasNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b330773a8bfd38e2779961a28e9800b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Make a page request and test for token generation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Functional',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'language' => 'Drupal\\Core\\Language\\Language',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'pathaliastesttrait' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
         'functionName' => 'assertPageTokens',
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