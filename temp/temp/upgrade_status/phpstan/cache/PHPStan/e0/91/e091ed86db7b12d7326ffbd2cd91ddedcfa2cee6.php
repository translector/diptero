<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/taxonomy/tests/src/Traits/TaxonomyTestTrait.php-1594234425',
   'data' => 
  array (
    '6edd734c22c406aa21f84c3d486b2a36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common helper methods for Taxonomy module tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\taxonomy\\Traits',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabularyinterface' => 'Drupal\\taxonomy\\VocabularyInterface',
        ),
         'className' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '87229e9610fd3c440dd0116e9ae7fd30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a new vocabulary with random properties.
   *
   * @return \\Drupal\\taxonomy\\VocabularyInterface
   *   A vocabulary used for testing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\taxonomy\\Traits',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabularyinterface' => 'Drupal\\taxonomy\\VocabularyInterface',
        ),
         'className' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
         'functionName' => 'createVocabulary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd11c2a9a39c104a65056c9d4b38c07f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a new term with random properties given a vocabulary.
   *
   * @param \\Drupal\\taxonomy\\VocabularyInterface $vocabulary
   *   The vocabulary object.
   * @param array $values
   *   (optional) An array of values to set, keyed by property name.
   *
   * @return \\Drupal\\taxonomy\\TermInterface
   *   The new taxonomy term object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\taxonomy\\Traits',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabularyinterface' => 'Drupal\\taxonomy\\VocabularyInterface',
        ),
         'className' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
         'functionName' => 'createTerm',
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