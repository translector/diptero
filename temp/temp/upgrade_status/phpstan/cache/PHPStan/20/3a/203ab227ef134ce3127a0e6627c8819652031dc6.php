<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/migrate/src/MigrateExecutable.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    'f7c88fa98746e0bb3fca75c64e4896f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a migrate executable class.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd226a8f58a55a2cf5405b27dd78bdd4' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f67d62fdda5c1de36d1fc3319fa4d127' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '133da243b79fbc664820bfedf8129d11' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf512ac5d90f556b2caaf2908addff6a' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '002799b64f9661dca79c557d072e2ad3' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f34e281748b6f341ce1f8a948c609e9' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71a0dc2a18e503c8e701a1331bb06898' => 
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
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd585a7c047b40d284374f1d4fcfa85ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration of the migration to do.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd339f9f1ed88a5f3c427406eac70f900' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Status of one row.
   *
   * The value is a MigrateIdMapInterface::STATUS_* constant, for example:
   * STATUS_IMPORTED.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f81a0b26f944e3b77d7f1d6829b1b997' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ratio of the memory limit at which an operation will be interrupted.
   *
   * @var float
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69176775882d57c5d4d67ee86b014a71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The PHP memory_limit expressed in bytes.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd18147fb82e3e216e5c44a05e6a0f3c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration values of the source.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e005edcec2cf99feb8bc3c4b2a2aa944' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of counts. Initially used for cache hit/miss tracking.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b88dc7c14f55f891f8b169ef56363051' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '542d343a4b696e6c8c9c6a6beab70e72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b954c7fe5833a975851c8c3fa4a800aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Migration message service.
   *
   * @todo https://www.drupal.org/node/2822663 Make this protected.
   *
   * @var \\Drupal\\migrate\\MigrateMessageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '37bff2075fd2aeb1415773e45a4822b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a MigrateExecutable and verifies and sets the memory limit.
   *
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration to run.
   * @param \\Drupal\\migrate\\MigrateMessageInterface $message
   *   (optional) The migrate message service.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   (optional) The event dispatcher.
   *
   * @throws \\Drupal\\migrate\\MigrateException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94de7eb935ce769f0bcff252421d43b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the source.
   *
   * Makes sure source is initialized based on migration settings.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
   *   The source.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'getSource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1c62334e09246923c9b960b7a3f154b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the event dispatcher.
   *
   * @return \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'getEventDispatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b98d9fa3c312d444e5033d0fa334d155' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a9b825eccb526799464c49ebd5aa0b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'rollback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '096004c0ab0cb3d8cbd4460c03644d39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the ID map from the current migration.
   *
   * @return \\Drupal\\migrate\\Plugin\\MigrateIdMapInterface
   *   The ID map.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'getIdMap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b15f74346be7d63772324426295943c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'processRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '173bcd3bf45e5ea4d332b1b63deb89d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var $plugin \\Drupal\\migrate\\Plugin\\MigrateProcessInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'processRow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd24790ce79cc592050ec345b7b937a44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches the key array for the current source record.
   *
   * @return array
   *   The current source IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'currentSourceIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b169ad2ba1c6029f3926e03ba000a07c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'saveMessage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1178dd119cf47622de54aaa4a43e591d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Takes an Exception object and both saves and displays it.
   *
   * Pulls in additional information on the location triggering the exception.
   *
   * @param \\Exception $exception
   *   Object representing the exception.
   * @param bool $save
   *   (optional) Whether to save the message in the migration\'s mapping table.
   *   Set to FALSE in contexts where this doesn\'t make sense.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'handleException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c688634eeeb00222e2ba6dd26160f99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks for exceptional conditions, and display feedback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'checkStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '389dd01ebc18d77d170680affb07847d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests whether we\'ve exceeded the desired memory threshold.
   *
   * If so, output a message.
   *
   * @return bool
   *   TRUE if the threshold is exceeded, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'memoryExceeded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4574872592068e917d663e7f90d22b52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the memory usage so far.
   *
   * @return int
   *   The memory usage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'getMemoryUsage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da2c660d6683a8fb0476e65700e7eeca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tries to reclaim memory.
   *
   * @return int
   *   The memory usage after reclaim.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'attemptMemoryReclaim',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ed26d48747f748f6617e7b9a5405cd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a string representation for the given byte count.
   *
   * @param int $size
   *   A size in bytes.
   *
   * @return string
   *   A translated string representation of the size.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'migrateevents' => 'Drupal\\migrate\\Event\\MigrateEvents',
          'migrateimportevent' => 'Drupal\\migrate\\Event\\MigrateImportEvent',
          'migratepostrowsaveevent' => 'Drupal\\migrate\\Event\\MigratePostRowSaveEvent',
          'migrateprerowsaveevent' => 'Drupal\\migrate\\Event\\MigratePreRowSaveEvent',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'migraterowdeleteevent' => 'Drupal\\migrate\\Event\\MigrateRowDeleteEvent',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\migrate\\MigrateExecutable',
         'functionName' => 'formatSize',
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