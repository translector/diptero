<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_reference_revisions/src/EntityReferenceRevisionsOrphanPurger.php-1583961090,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '99aeb55c14420e180b2dd28e4b086b76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages orphan composite revision deletion.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee7d37f24bd13995c178a61d907a6af6' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb89f75b042249c579ff0f9445b80b00' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fe32cad215d23cb830e153086bfc3fa' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78f7d5a311fd8e0d5f4f7a88fb22b30b' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '050ec6f7c602826648cee62a92fe0e55' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e963cf12338a7eddaee83b4ef1ca0963' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ad3d3c4da7b2f068d30c3a2ea3ba7b2' => 
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
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca4ad2912fa9a663f06f82c8b7805217' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parent is valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24f491674a219d167f778d369456fa3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parent is invalid and usage can not be verified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '790ddbb5a6e6e00480342a24a8a48282' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parent is invalid and paragraph is safe to delete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bc62ff48281080cf4a16bc2750322e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6c0e2fddf1fa824add1b69154ffbf173' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The date formatter service.
   *
   * @var \\Drupal\\Core\\Datetime\\DateFormatterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0bb1dcbb7403d262a102bae4dbea0bbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The time service.
   *
   * @var \\Drupal\\Component\\Datetime\\TimeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8459416958afb16da55e3b4f5b9ef0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database service.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb5a82e1526de4379027b349b2690783' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a981a5918f612e6ca6a9f9de9ee88f14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of already checked parents.
   *
   * @var bool[][]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a63605326bbe52ba96900071d70ad25a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a EntityReferenceRevisionsOrphanManager object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Datetime\\DateFormatterInterface $date_formatter
   *   The date formatter service.
   * @param \\Drupal\\Component\\Datetime\\TimeInterface $time
   *   The time service.
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database service.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '103c613d8ac4f8778a8b9349e93b2d43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes unused revision or an entity if there are no revisions remaining.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $composite_revision
   *   The composite revision.
   *
   * @return bool
   *   TRUE if an entity revision was deleted. Otherwise, FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'deleteUnusedRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '880b1ce95ec1476e8faa1a41ce0bc6ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Batch operation for checking orphans for a given entity type.
   *
   * @param string $entity_type_id
   *   The entity type id, for example \'paragraph\'.
   * @param array $context
   *   The context array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'deleteOrphansBatchOperation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e48ec1c1313a04ddf3c04cca45be165a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityStorageInterface $composite_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'deleteOrphansBatchOperation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d292586a44b24c7a2d81ded80fe4791' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $composite_revision */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'deleteOrphansBatchOperation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91eed80b6c55b23ba1ab244d72046949' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Batch dispatch submission finished callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'batchSubmitFinished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c51d8f494f95de14cbc83fdc4c75ccd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a batch for executing deletion of the orphaned composite entities.
   *
   * @param array $composite_entity_type_ids
   *   An array of composite entity type IDs to remove orphaned items for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'setBatch',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0ed842647c37be46a6e3127064e02f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finished callback for the batch process.
   *
   * @param bool $success
   *   Whether the batch completed successfully.
   * @param array $results
   *   The results array.
   * @param array $operations
   *   The operations array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'doBatchSubmitFinished',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f137d6ff373336b899bb31417b11c1f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the composite entity is used.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $composite_revision
   *   The composite revision.
   *
   * @return bool
   *   Whether the composite entity is used, FALSE if it is safe to delete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'isUsed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15de56a312c77e959cc5d185b1bceb39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the parent type/field is a valid combination that can be queried.
   *
   * @param string $parent_type
   *   Parent entity type ID.
   * @param string $parent_field_name
   *   Parent field name.
   *
   * @return int
   *   static::PARENT_VALID, static::PARENT_INVALID_SKIP or
   *   static::PARENT_INVALID_DELETE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_reference_revisions',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\entity_reference_revisions\\EntityReferenceRevisionsOrphanPurger',
         'functionName' => 'isValidParent',
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