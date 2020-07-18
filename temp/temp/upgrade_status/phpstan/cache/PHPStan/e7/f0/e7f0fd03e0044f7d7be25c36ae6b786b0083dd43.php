<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/locale/src/LocaleConfigManager.php-1594234425',
   'data' => 
  array (
    '10931597e20c70e52dde51b902ad32e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages configuration supported in part by interface translation.
 *
 * This manager is responsible to update configuration overrides and active
 * translations when interface translation data changes. This allows Drupal to
 * translate user roles, views, blocks, etc. after Drupal has been installed
 * using the locale module\'s storage. When translations change in locale,
 * LocaleConfigManager::updateConfigTranslations() is invoked to update the
 * corresponding storage of the translation in the original config object or an
 * override.
 *
 * In turn when translated configuration or configuration language overrides are
 * changed, it is the responsibility of LocaleConfigSubscriber to update locale
 * storage.
 *
 * By design locale module only deals with sources in English.
 *
 * @see \\Drupal\\locale\\LocaleConfigSubscriber
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c2fa9212415b317cac8c09809a9e9909' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The storage instance for reading configuration data.
   *
   * @var \\Drupal\\Core\\Config\\StorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8780fe5e9edeacf33f04e25156139961' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string storage for reading and writing translations.
   *
   * @var \\Drupal\\locale\\StringStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '22ce04f9215588204a155b2a1cb71e78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array with preloaded string translations.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '881ee3444291f21208ada7c1893b3bd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a734b544de9c41fcab5ef4806c6fc2b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\language\\ConfigurableLanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57ab343b5e3ba5861152a66e14344102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The typed config manager.
   *
   * @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b35357adf68132e36b7cda45a3fa68bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether or not configuration translations are being updated from locale.
   *
   * @see self::isUpdatingFromLocale()
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c97dbd8bd624d27e0b7e75fd50f5c16c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The locale default config storage instance.
   *
   * @var \\Drupal\\locale\\LocaleDefaultConfigStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d3e63f05e46f6f7c0651db4395e1a09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration manager.
   *
   * @var \\Drupal\\Core\\Config\\ConfigManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36ff280ae2450ea1425526213884683a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new typed configuration manager.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $config_storage
   *   The storage object to use for reading configuration data.
   * @param \\Drupal\\locale\\StringStorageInterface $locale_storage
   *   The locale storage to use for reading string translations.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The configuration factory
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The typed configuration manager.
   * @param \\Drupal\\language\\ConfigurableLanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\locale\\LocaleDefaultConfigStorage $default_config_storage
   *   The locale default configuration storage.
   * @param \\Drupal\\Core\\Config\\ConfigManagerInterface $config_manager
   *   The configuration manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cdb16707ff4b2f66950442b6deb07e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets array of translated strings for Locale translatable configuration.
   *
   * @param string $name
   *   Configuration object name.
   *
   * @return array
   *   Array of Locale translatable elements of the default configuration in
   *   $name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getTranslatableDefaultConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9727a69f8054797cf6d309a716560a60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets translatable configuration data for a typed configuration element.
   *
   * @param \\Drupal\\Core\\TypedData\\TypedDataInterface $element
   *   Typed configuration element.
   *
   * @return array|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   A nested array matching the exact structure under $element with only the
   *   elements that are translatable wrapped into a TranslatableMarkup. If the
   *   provided $element is not traversable, the return value is a single
   *   TranslatableMarkup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getTranslatableData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '320b4948742cab540773e1bf97d72ab7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process the translatable data array with a given language.
   *
   * If the given language is translatable, will return the translated copy
   * which will only contain strings that had translations. If the given
   * language is English and is not translatable, will return a simplified
   * array of the English source strings only.
   *
   * @param string $name
   *   The configuration name.
   * @param array $active
   *   The active configuration data.
   * @param array|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup[] $translatable
   *   The translatable array structure. A nested array matching the exact
   *   structure under of the default configuration for $name with only the
   *   elements that are translatable wrapped into a TranslatableMarkup.
   * @param string $langcode
   *   The language code to process the array with.
   *
   * @return array
   *   Processed translatable data array. Will only contain translations
   *   different from source strings or in case of untranslatable English, the
   *   source strings themselves.
   *
   * @see self::getTranslatableData()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'processTranslatableData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d522aa00814e91ad750afe3e3b126e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves translated configuration override.
   *
   * @param string $name
   *   Configuration object name.
   * @param string $langcode
   *   Language code.
   * @param array $data
   *   Configuration data to be saved, that will be only the translated values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'saveTranslationOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0a31ad894343e016a1651f896a4c9a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves translated configuration data.
   *
   * @param string $name
   *   Configuration object name.
   * @param array $data
   *   Configuration data to be saved with translations merged in.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'saveTranslationActive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c562988527244d47cbe54186bfadf855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes translated configuration data.
   *
   * @param string $name
   *   Configuration object name.
   * @param string $langcode
   *   Language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'deleteTranslationOverride',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52351108089c494a295c63b7c67359bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets configuration names associated with components.
   *
   * @param array $components
   *   (optional) Array of component lists indexed by type. If not present or it
   *   is an empty array, it will update all components.
   *
   * @return array
   *   Array of configuration object names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getComponentNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'de459c4856cd1dcfde031ecbc3e1c2ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets configuration names associated with strings.
   *
   * @param array $lids
   *   Array with string identifiers.
   *
   * @return array
   *   Array of configuration object names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getStringNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd430f93ef48a41a96e5383554af96b03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes configuration for language.
   *
   * @param string $langcode
   *   Language code to delete.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'deleteLanguageTranslations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bda8da4399d06745c0086d7297c2a18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates string using the localization system.
   *
   * So far we only know how to translate strings from English so the source
   * string should be in English.
   * Unlike regular t() translations, strings will be added to the source
   * tables only if this is marked as default data.
   *
   * @param string $name
   *   Name of the configuration location.
   * @param string $langcode
   *   Language code to translate to.
   * @param string $source
   *   The source string, should be English.
   * @param string $context
   *   The string context.
   *
   * @return string|false
   *   Translated string if there is a translation, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'translateString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3444263555266f7485af3e5016bb5d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset static cache of configuration string translations.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'afd3d406a8360de9051fb6afa03710ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the translation object for the given source/context and language.
   *
   * @param string $name
   *   Name of the configuration location.
   * @param string $langcode
   *   Language code to translate to.
   * @param string $source
   *   The source string, should be English.
   * @param string $context
   *   The string context.
   *
   * @return \\Drupal\\locale\\TranslationString|false
   *   The translation object if the string was not empty or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6826ceb9f0eb4644a9106c7539a5b4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a language has configuration translation.
   *
   * @param string $name
   *   Configuration name.
   * @param string $langcode
   *   A language code.
   *
   * @return bool
   *   A boolean indicating if a language has configuration translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'hasTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf9768f0163712e3bf02a462ad4127da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the original language code for this shipped configuration.
   *
   * @param string $name
   *   The configuration name.
   *
   * @return null|string
   *   Language code of the default configuration for $name. If the default
   *   configuration data for $name did not contain a language code, it is
   *   assumed to be English. The return value is NULL if no such default
   *   configuration exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getDefaultConfigLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '406292219bf67e2391e5696038da7b91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current language code for this active configuration.
   *
   * @param string $name
   *   The configuration name.
   *
   * @return null|string
   *   Language code of the current active configuration for $name. If the
   *   configuration data for $name did not contain a language code, it is
   *   assumed to be English. The return value is NULL if no such active
   *   configuration exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'getActiveConfigLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c88bfb0672ad134e038600a638b4afe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the given configuration is supported for interface translation.
   *
   * @param string $name
   *   The configuration name.
   *
   * @return bool
   *   TRUE if interface translation is supported.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'isSupported',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d6eb7462ccc188e8b421ef0431606c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether configuration translations are being updated from locale.
   *
   * @return bool
   *   Whether or not configuration translations are currently being updated.
   *   If TRUE, LocaleConfigManager is in control of the process and the
   *   reference data is locale\'s storage. Changes made to active configuration
   *   and overrides in this case should not feed back to locale storage.
   *   On the other hand, when not updating from locale and configuration
   *   translations change, we need to feed back to the locale storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'isUpdatingTranslationsFromLocale',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '776d73183d0c2fa1a9cd0586f633f396' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates all configuration translations for the names / languages provided.
   *
   * To be used when interface translation changes result in the need to update
   * configuration translations to keep them in sync.
   *
   * @param array $names
   *   Array of names of configuration objects to update.
   * @param array $langcodes
   *   (optional) Array of language codes to update. Defaults to all
   *   configurable languages.
   *
   * @return int
   *   Total number of configuration override and active configuration objects
   *   updated (saved or removed).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'updateConfigTranslations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a256f3d5c28e964f4afaf1ea1bc4670b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters override data based on default translatable items.
   *
   * @param array $override_data
   *   Configuration override data.
   * @param array $translatable
   *   Translatable data array. @see self::getTranslatableData()
   *
   * @return array
   *   Nested array of any items of $override_data which did not have keys in
   *   $translatable. May be empty if $override_data only had items which were
   *   also in $translatable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\locale',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
        ),
         'className' => 'Drupal\\locale\\LocaleConfigManager',
         'functionName' => 'filterOverride',
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