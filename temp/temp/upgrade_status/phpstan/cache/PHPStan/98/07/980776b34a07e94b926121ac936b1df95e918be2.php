<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Functional/Experimental/ParagraphsExperimentalTranslationsTest.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsLastEntityQueryTrait.php-1590060906',
   'data' => 
  array (
    'd0fb543f30787d167bd3e703f7d0eb6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test paragraphs with translations.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3030bfadc19e2d0660ac7c22d4b7018b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test trait providing helpers to query latest entities created.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52c40d09b8b8a457ba920f9f70f7e2b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the latest entity created of a given type.
   *
   * Will fail the test if there is no entity of that type.
   *
   * @param string $entity_type_id
   *   The storage name of the entity.
   * @param bool $load
   *   (optional) Whether or not the return thould be the loaded entity.
   *   Defaults to FALSE.
   *
   * @return mixed
   *   The ID of the latest created entity of that type. If $load is TRUE, will
   *   use ::loadUnchanged() to get a fresh version of the entity object and
   *   return it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => 'getLastEntityOfType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '32ab4f815e20bc6e9523ff8e584d7562' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f41abad61b66a02babc554044545229' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * User with admin rights.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5ae6ad5be89dc382fb2ed0ec4ed4194' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb1e8a286853be0422a18711d6331acf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests auto collapse when paragraphs do not have translatable fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationsTest',
         'functionName' => 'testUntranslatableAutoCollapse',
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