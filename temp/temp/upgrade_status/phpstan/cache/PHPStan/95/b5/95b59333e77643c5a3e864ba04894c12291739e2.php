<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/Traits/Core/PathAliasTestTrait.php-1594234425',
   'data' => 
  array (
    '3c448486aa1bafe13c4b843efa95dd7a' => 
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
         'className' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'faf4cb0776e4fcf38c210f5a0551a36d' => 
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
         'className' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
         'functionName' => 'createPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba9d703aa9a6308935e538f6b6df38bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\path_alias\\PathAliasInterface $path_alias */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
         'functionName' => 'createPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '027ed0b51b305146ddc256a7c37115f4' => 
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
         'className' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
         'functionName' => 'loadPathAliasByConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c30bd6bd62105dedb036eb52508daf6' => 
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
         'className' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
         'functionName' => 'assertPathAliasExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3765d514b6a8bfa4ada87f121baf3b53' => 
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
         'className' => 'Drupal\\Tests\\Traits\\Core\\PathAliasTestTrait',
         'functionName' => 'assertPathAliasNotExists',
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