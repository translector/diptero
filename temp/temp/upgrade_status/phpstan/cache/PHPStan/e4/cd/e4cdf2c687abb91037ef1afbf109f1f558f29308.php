<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/paragraphs/tests/src/Functional/Experimental/ParagraphsExperimentalTranslationTest.php-1590060906',
   'data' => 
  array (
    '038757c2630ae1ce237ce24cc3e3f917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the configuration of paragraphs.
 *
 * @group paragraphs
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd298b4ba6943846cded1469dbc91a24e' => 
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
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3e55e2e4d4e60cca5134c9a8273fa93e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b5551fe3260dfcb5a2127b94ea47386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the paragraph translation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'testParagraphTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96e992930d9bdfffbf7bf3b74f0b911f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the paragraph buttons presence in translation multilingual workflow.
   *
   * This test covers the following test cases:
   * 1) original node langcode in EN, translate in FR, change to DE.
   * 2) original node langcode in DE, change site langcode to DE, change node
   *    langcode to EN.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'testParagraphTranslationMultilingual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0e7adf364aa2d19ae960e9802904dc47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the paragraphs buttons presence in multilingual workflow.
   *
   * This test covers the following test cases:
   * 1) original node langcode in german, change to english.
   * 2) original node langcode in english, change to german.
   * 3) original node langcode in english, change site langcode to german,
   *   change node langcode to german.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'testParagraphsMultilingualWorkflow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c759a5377d060c78901a76665bfd648' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the paragraphs buttons are present.
   *
   * @param int $count
   *   Number of paragraphs buttons to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'assertParagraphsButtons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07b08b81a285165c3a2c67b4ede3fee2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the paragraphs buttons are NOT present.
   *
   * @param int $count
   *   Number of paragraphs buttons to look for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'assertNoParagraphsButtons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ec9a261077beb5def52cd90cfd50fc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertParagraphsButtons and assertNoParagraphsButtons.
   *
   * @param int $count
   *   Number of paragraphs buttons to look for.
   * @param bool $hidden
   *   TRUE if these buttons should not be shown, FALSE otherwise.
   *   Defaults to TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'assertParagraphsButtonsHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cfe3827610da0b195d922426093bb36e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert each paragraph items have the same langcode as the node one.
   *
   * @param string $node_id
   *   The node ID which contains the paragraph items to be checked.
   * @param string $source_lang
   *   The expected node source langcode. Defaults to \'en\'.
   * @param string $trans_lang
   *   The expected translated node langcode. Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'assertParagraphsLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57c6f8a4f0f3fcac4c23546abcdd67ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\NodeInterface $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'assertParagraphsLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9457bf065aaf68c263d7236276099180' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityBase $paragraph */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'paragraph' => 'Drupal\\paragraphs\\Entity\\Paragraph',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\paragraphs\\Functional\\Experimental\\ParagraphsExperimentalTranslationTest',
         'functionName' => 'assertParagraphsLangcode',
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