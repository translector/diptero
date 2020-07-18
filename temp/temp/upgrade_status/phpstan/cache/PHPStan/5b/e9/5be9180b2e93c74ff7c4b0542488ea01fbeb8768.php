<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/lib/Drupal/Core/Block/BlockBase.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Plugin/ContextAwarePluginAssignmentTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1594234425,/var/www/html/web/core/lib/Drupal/Core/Plugin/PluginWithFormsTrait.php-1594234425',
   'data' => 
  array (
    '7b2ecbe55808338af6145111353f03d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a base block implementation that most blocks plugins will extend.
 *
 * This abstract class provides the generic block configuration form, default
 * block settings, and handling for general user-defined block visibility
 * settings.
 *
 * @ingroup block_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b7ca6267ff327a366b79ee89ad96a83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Handles context assignments for context-aware plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd66f88a37da54734ba61fcae51f624cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures the t() method is available.
   *
   * @see \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '255d7192d7eb4bd3cbd98abb8b546f3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the context handler.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'contextHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c301f63e2c703a3ce46719e45d940486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a form element for assigning a context to a given slot.
   *
   * @param \\Drupal\\Core\\Plugin\\ContextAwarePluginInterface $plugin
   *   The context-aware plugin.
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts.
   *
   * @return array
   *   A form element for assigning context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'addContextAssignmentElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0227c1d71fbe659a00523ccf827f8e49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the messenger service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4cfb8be025f79810b6738c0ae125db4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '862486bc75a3863fe1c2a91aea655e15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the messenger.
   *
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setMessenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '679d9d6a361179599f6ea42fff82e917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'messenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd83c9e0ba488c2acbe6e708d36cc3eed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait with typical behavior for plugins which have forms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9d52cd8d55a778d4e18ec1df1b1ebb4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getFormClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d70047b09af8de2f0e6ae6a3287b622' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'hasFormClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4aa137c2b235545ee990ed2efcf774ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The transliteration service.
   *
   * @var \\Drupal\\Component\\Transliteration\\TransliterationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6db45346ada1fb3ab774070259440da8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'label',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61e4cd26d2bcf2ee11d731e7f7202f47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fbc9a2cd18029d0741b23ea1c9d3c9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c27fe50fd613dfea10941ba4228a8a6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b28d67b62d974fc8c65d5870398489a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns generic default configuration for block plugins.
   *
   * @return array
   *   An associative array with the default configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'baseConfigurationDefaults',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fd91595a560ea31a25bae6fa4f75dba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ada5903a01f427600295ee85337986c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setConfigurationValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '421320743e2920f7155ac54eeb400c70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f07e1663aef5ddaceb1894a86fc1f921' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'access',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b81e54f9de5fdf4e4b7d5cb5410eeba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the block should be shown.
   *
   * Blocks with specific access checking should override this method rather
   * than access(), in order to avoid repeating the handling of the
   * $return_as_object argument.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user session for which to check access.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   The access result.
   *
   * @see self::access()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ba0a128ab0acad567fdf174d8252e74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Creates a generic configuration form for all block types. Individual
   * block plugins can add elements to this form by overriding
   * BlockBase::blockForm(). Most block plugins should not override this
   * method unless they need to alter the generic form elements.
   *
   * @see \\Drupal\\Core\\Block\\BlockBase::blockForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c8374ca27e8988a9c68bc7aea62c990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4b1fdd90d175eb3e3bbcb93603eed57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Most block plugins should not override this method. To add validation
   * for a specific block type, override BlockBase::blockValidate().
   *
   * @see \\Drupal\\Core\\Block\\BlockBase::blockValidate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'adc68231b56fc7013415069a5d384479' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6d13d40ef35addd0720c88abfe0061d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Most block plugins should not override this method. To add submission
   * handling for a specific block type, override BlockBase::blockSubmit().
   *
   * @see \\Drupal\\Core\\Block\\BlockBase::blockSubmit()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1fc057b5e4bda1e0ba73a592d13c7cee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f02f27b7a79ff03ae9b8df5628064d98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getMachineNameSuggestion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4539f3020ccccb87426e8696b745cac5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getPreviewFallbackString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a3ebfef9f0c2f7f0751032e9a5f8cae0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the transliteration service.
   *
   * @return \\Drupal\\Component\\Transliteration\\TransliterationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'transliteration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d97086bec5bfefe324c3077d4686766' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the transliteration service.
   *
   * @param \\Drupal\\Component\\Transliteration\\TransliterationInterface $transliteration
   *   The transliteration service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setTransliteration',
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