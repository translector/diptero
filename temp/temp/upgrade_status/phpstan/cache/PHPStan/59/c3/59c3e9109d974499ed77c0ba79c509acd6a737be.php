<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/modules/webform_access/src/Entity/WebformAccessGroup.php-1594690523,/var/www/html/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1594234425',
   'data' => 
  array (
    '2ab1445e2139916e095b8246bca59af2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the webform access group entity.
 *
 * @ConfigEntityType(
 *   id = "webform_access_group",
 *   label = @Translation("Webform access group"),
 *   label_collection = @Translation("Access groups"),
 *   label_singular = @Translation("access group"),
 *   label_plural = @Translation("access groups"),
 *   label_count = @PluralTranslation(
 *     singular = "@count access group",
 *     plural = "@count access groups",
 *   ),
 *   handlers = {
 *     "storage" = "\\Drupal\\webform_access\\WebformAccessGroupStorage",
 *     "access" = "Drupal\\webform_access\\WebformAccessGroupAccessControlHandler",
 *     "list_builder" = "Drupal\\webform_access\\WebformAccessGroupListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\webform_access\\WebformAccessGroupForm",
 *       "edit" = "Drupal\\webform_access\\WebformAccessGroupForm",
 *       "duplicate" = "Drupal\\webform_access\\WebformAccessGroupForm",
 *       "delete" = "Drupal\\webform_access\\WebformAccessGroupDeleteForm",
 *     }
 *   },
 *   admin_permission = "administer webform",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/webform/config/access/group/manage/add",
 *     "edit-form" = "/admin/structure/webform/config/access/group/manage/{webform_access_group}",
 *     "duplicate-form" = "/admin/structure/webform/config/access/group/manage/{webform_access_group}/duplicate",
 *     "delete-form" = "/admin/structure/webform/config/access/group/manage/{webform_access_group}/delete",
 *     "collection" = "/admin/structure/webform/config/access/group/manage",
 *   },
 *   config_export = {
 *     "id",
 *     "uuid",
 *     "label",
 *     "description",
 *     "type",
 *     "permissions",
 *     "emails",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8558893cd1d73e4363e772a165d449d' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e27cc27171a03b543660ca396809da99' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a746d030ce45847baedcefc66112011f' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd35668b7ed490c74303bce6408c0e9b5' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89f5acbe6bb97b5678eafe3bd48bb188' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '666ed17f7d6ea405be4c73e2253ba864' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd06affea1f9f1cc9fce44d92c2d89e9b' => 
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
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd55003006a38c5c9597312860989a062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7bbe2ac411c6ced09259260c22f57dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group UUID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3451e00c5b61f5f0be1ca2ce37299e36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '08d29ede3cdbcfb5e0031426942c3f71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group description.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c97a003f29b59662ebe43813097dfd22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5443514ac2f609d20a0d9967d193b9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group permissions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '897835e33622d1b2a976759eec89797c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group admin user ids.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8f312d5144c0bbd69030eea06c5e75e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group user ids.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd0799959b1a1f8f0bec3c2077162c11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group source entity ids.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a059efeb5ee78158e3b9f8995065e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The webform access group emails.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f2ec6d0c60e7bc431b0bc14c56e74bee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb4fef959e7551a582f9e98092b319f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getTypeLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a11e03aaebe3a1db3a54981de2cca0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'setAdminIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f9c23d269cd070695b4ac8cce5c9e510' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getAdminIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '14beaebb853a4ed41f9cab8f282cd4fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'setUserIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eee72fcf97556f5169488e3d63b02cdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getUserIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab675d031e677cfb79f971117ae13ff7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'setEntityIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e123532ed2f94051dab988a7cf614e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getEntityIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f541f43b2eed0633007c0a6bee9a90c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'setEmails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac1411e9f4aa7694b09ee34b7f759c5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'getEmails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '768692cca6e2939d27d365e575068610' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'addAdminId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '39462bfef879e1f868fa369370ced190' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'removeAdminId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d6a8926633b9b6dfbcd78d570271579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'addUserId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0446c6ce0c5ee6d8a4a125592d76ed84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'removeUserId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'acc80677595d255a38a70936632b050e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'addEntityId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4c8ad39ad63a76a3354761f8426f21c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'removeEntityId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8f16ae777ce5945308c11b74c53b4ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'addEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cdbfb9dc4c40d84eab0772bd32de212a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'removeEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe20f3eb3e25770be73bda61d8ac5c23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform_access\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'webformaccessgroupinterface' => 'Drupal\\webform_access\\WebformAccessGroupInterface',
        ),
         'className' => 'Drupal\\webform_access\\Entity\\WebformAccessGroup',
         'functionName' => 'invalidateTags',
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