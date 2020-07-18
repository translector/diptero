<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Functional/Classic/ParagraphsClassicContentModerationTranslationsTest.php-1590060906,/var/www/html/web/modules/contrib/paragraphs/tests/src/Traits/ParagraphsLastEntityQueryTrait.php-1590060906',
   'data' => 
  array (
    'f77e7a11d921d0b0e6586b4a896e8e58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test paragraphs and content moderation with translations.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '621e7a2417f3e0e893b3f37b1ce9009b' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36db916198ca06f2912a632974bcfb9f' => 
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
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => 'getLastEntityOfType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0600032b5a658540c108bd685036f82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bdb25486c6b7ce871a70344bd673b6f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * User with admin rights.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1a1596b87a2b5bc18de3cb1c81a2a5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b45b31af1e2139d003a6a2f9fe93336a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests content moderation with translatable content entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => 'testTranslatableContentEntities',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb407b47b31e3c12059e12f25c84060a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $display_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic',
         'uses' => 
        array (
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraphslastentityquerytrait' => 'Drupal\\Tests\\paragraphs\\Traits\\ParagraphsLastEntityQueryTrait',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Classic\\ParagraphsClassicContentModerationTranslationsTest',
         'functionName' => 'testTranslatableContentEntities',
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