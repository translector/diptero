<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/honeypot/tests/src/Functional/HoneypotFormTest.php-1588104569,/var/www/html/web/core/modules/comment/src/Tests/CommentTestTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '6536703a9319a52fa8922c0e87d62b8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test Honeypot spam protection functionality.
 *
 * @group honeypot
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca7195d6cf12680859bb2649a78baab2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the Comment test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d5b30864c36052c5b877186e28b24eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the default comment field to an entity.
   *
   * Attaches a comment field named \'comment\' to the given entity type and
   * bundle. Largely replicates the default behavior in Drupal 7 and earlier.
   *
   * @param string $entity_type
   *   The entity type to attach the default comment field to.
   * @param string $bundle
   *   The bundle to attach the default comment field to.
   * @param string $field_name
   *   (optional) Field name to use for the comment field. Defaults to
   *     \'comment\'.
   * @param int $default_value
   *   (optional) Default value, one of CommentItemInterface::HIDDEN,
   *   CommentItemInterface::OPEN, CommentItemInterface::CLOSED. Defaults to
   *   CommentItemInterface::OPEN.
   * @param string $comment_type_id
   *   (optional) ID of comment type to use. Defaults to \'comment\'.
   * @param string $comment_view_mode
   *   (optional) The comment view mode to be used in comment field formatter.
   *   Defaults to \'full\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'addDefaultCommentField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '553b7706e7bcc5c3e7ea1cc8102a10ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'addDefaultCommentField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0232f2e9e46497d7b35c762807b477a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'db25819aadd10c08b0871a121c7482af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a3137bfb693aad49451ff2691a85a6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
   * important security information and usage guidelines.
   *
   * In order for strings to be localized, make them available in one of the
   * ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink. When
   * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   * $this->t(). Otherwise create a new
   * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $args
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to. See the
   *     @link i18n Internationalization topic @endlink for more information
   *     about string contexts.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   An object that, when cast to a string, returns the translated string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75c5f1e1ca959b0c3242ec76bf93935d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a string containing a count of items.
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e094a4055767098411924c6d70280517' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of plurals supported by a given language.
   *
   * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7182ea90fa3391da45ce6f6ab7214d71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ef12940ee1cbce19606f63d9917e6a1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service to use.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
   *   The string translation service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fba276cd7bd230bb33b98dc4f3b36429' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Admin user.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8ef6baa34f8612f1333cb85e62d5b8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Site visitor.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e33089a088b40a735728c95b5d51b4a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Node object.
   *
   * @var \\Drupal\\node\\NodeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f77857196608e5ed9e1bcb382c8bb2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default theme.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f6ae54a3d981d69303ea8f271536ec07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '720243e70be5e6cdbfb63215d46a7f3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '643fabd81324a0bfe3ac8d1f4474bea9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Make sure user login form is not protected.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testUserLoginNotProtected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7543149ca6cd9d3dd4710a5c0da7e6fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test user registration (anonymous users).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectRegisterUserNormal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a799ddc6794ac20a66234e64ecc48f7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test for user register honeypot filled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectUserRegisterHoneypotFilled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcfba6ee12dba2199e232e6d00a5f11b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test for user register too fast.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectRegisterUserTooFast',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa60d776c7a3102a117c715d9d1477da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test that any (not-strict-empty) value triggers protection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testStrictEmptinessOnHoneypotField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1d77c9da89b24238c51dd9807fb64be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test comment form protection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectCommentFormNormal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '149ae31abbf4b0732f94ffb64614b7c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test for comment form honeypot filled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectCommentFormHoneypotFilled',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fb35a2107f6091167ee531a7b99ccaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test for comment form honeypot bypass.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectCommentFormHoneypotBypass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b9b829a2e569e119a341fe7a2317b8d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test node form protection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectNodeFormTooFast',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '429b9d6a4866bca5fa39915b7361c11c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test node form protection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectNodeFormPreviewPassthru',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56c2b23239196cbacd6ad1a6512b533b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test protection on the Contact form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\honeypot\\Functional',
         'uses' => 
        array (
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'contactform' => 'Drupal\\contact\\Entity\\ContactForm',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\honeypot\\Functional\\HoneypotFormTest',
         'functionName' => 'testProtectContactForm',
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