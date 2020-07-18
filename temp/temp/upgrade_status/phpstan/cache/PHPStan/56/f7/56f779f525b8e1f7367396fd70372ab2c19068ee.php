<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/token/tests/src/Kernel/KernelTestBase.php-1586203134,/var/www/html/web/modules/contrib/token/tests/src/Functional/TokenTestTrait.php-1586203134,/var/www/html/web/core/tests/Drupal/Tests/Traits/Core/PathAliasTestTrait.php-1594234425',
   'data' => 
  array (
    '5a5f4c852b0aabaa89ad721eaf02263c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper test class with some added functions for testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'basekerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'tokentesttrait' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ce299e70ad5fe82594bd45b2cf3fe61' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c39f707c49c6a48e2d9787c83df5d701' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bb953739ed7fbea9811fd0d9a2e0e96' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'createPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9119e9ee91279812987cd2a0d89e9ef7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\path_alias\\PathAliasInterface $path_alias */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'createPathAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58eeaa588fcf1dad3e05c300b142aae0' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'loadPathAliasByConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd89b3b2041cfc4a0b8d0ab742a7589ab' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'assertPathAliasExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61f269ab615890964ddee40ddd743828' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'assertPathAliasNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '70ed4e94b9135a482a237f75f6437f7e' => 
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
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'assertPageTokens',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0217d3393f4e3242e27a6235b68a0a28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'basekerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'tokentesttrait' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7cc480f5bd5d4ba8b3864c62ff29579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\token\\Kernel',
         'uses' => 
        array (
          'basekerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'tokentesttrait' => 'Drupal\\Tests\\token\\Functional\\TokenTestTrait',
        ),
         'className' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
         'functionName' => 'setUp',
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