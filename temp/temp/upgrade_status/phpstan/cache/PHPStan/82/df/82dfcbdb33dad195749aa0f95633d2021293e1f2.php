<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/modules/filter/src/Entity/FilterFormat.php-1594234425',
   'data' => 
  array (
    '829545458ce4bad64e3403fd13dd474b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents a text format.
 *
 * @ConfigEntityType(
 *   id = "filter_format",
 *   label = @Translation("Text format"),
 *   label_collection = @Translation("Text formats"),
 *   label_singular = @Translation("text format"),
 *   label_plural = @Translation("text formats"),
 *   label_count = @PluralTranslation(
 *     singular = "@count text format",
 *     plural = "@count text formats",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\\filter\\FilterFormatAddForm",
 *       "edit" = "Drupal\\filter\\FilterFormatEditForm",
 *       "disable" = "Drupal\\filter\\Form\\FilterDisableForm"
 *     },
 *     "list_builder" = "Drupal\\filter\\FilterFormatListBuilder",
 *     "access" = "Drupal\\filter\\FilterFormatAccessControlHandler",
 *   },
 *   config_prefix = "format",
 *   admin_permission = "administer filters",
 *   entity_keys = {
 *     "id" = "format",
 *     "label" = "name",
 *     "weight" = "weight",
 *     "status" = "status"
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/content/formats/manage/{filter_format}",
 *     "disable" = "/admin/config/content/formats/manage/{filter_format}/disable"
 *   },
 *   config_export = {
 *     "name",
 *     "format",
 *     "weight",
 *     "roles",
 *     "filters",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '95ffa032140b08ac6f1290ee9f833d8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unique machine name of the format.
   *
   * @todo Rename to $id.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41eef53e4aa332dadef0cfc97a9cce34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unique label of the text format.
   *
   * Since text formats impact a site\'s security, two formats with the same
   * label but different filter configuration would impose a security risk.
   * Therefore, each text format label must be unique.
   *
   * @todo Rename to $label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf63653ccbba387e88413f14cea4a0ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Weight of this format in the text format selector.
   *
   * The first/lowest text format that is accessible for a user is used as
   * default format.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f212150d08c800fb1efa2a0403580b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of user role IDs to grant access to use this format on initial creation.
   *
   * This property is always empty and unused for existing text formats.
   *
   * Default configuration objects of modules and installation profiles are
   * allowed to specify a list of user role IDs to grant access to.
   *
   * This property only has an effect when a new text format is created and the
   * list is not empty. By default, no user role is allowed to use a new format.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd16f11aa040d63769abb3d4a3dd7c2fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Configured filters for this text format.
   *
   * An associative array of filters assigned to the text format, keyed by the
   * instance ID of each filter and using the properties:
   * - id: The plugin ID of the filter plugin instance.
   * - provider: The name of the provider that owns the filter.
   * - status: (optional) A Boolean indicating whether the filter is
   *   enabled in the text format. Defaults to FALSE.
   * - weight: (optional) The weight of the filter in the text format. Defaults
   *   to 0.
   * - settings: (optional) An array of configured settings for the filter.
   *
   * Use FilterFormat::filters() to access the actual filters.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dd10bd58dd1af45cf060bd424901bc55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of filters that are attached to this format.
   *
   * @var \\Drupal\\filter\\FilterPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7bdd08716a7da2f0bb0c368b6e3a0ab6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'id',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b14aa72d771f9e61cab1c4ea3d2f5a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'filters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '356e4fa27c02c595f75d9ac5edd3ff62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76c100a9fe4f67493009e32d2298c83b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'setFilterConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a392fa6fabe3953328b0135a519db7ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e12c7cf33f8ca7607c48f0dd5b1d10d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'disable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '728f3575d4c656a81f4e603be220ddad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'preSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ef480e805123d37165e84cf151b3b6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'postSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9626ebb73eaff3c1a7ddbf4e34fc63d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns if this format is the fallback format.
   *
   * The fallback format can never be disabled. It must always be available.
   *
   * @return bool
   *   TRUE if this format is the fallback format, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'isFallbackFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d2124ae6f353c499a16f9cceb152750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'getPermissionName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2d991f92c7fea0695cb75e7e5386f0f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'getFilterTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30578591cb4bb43cd2414b03e320ba1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'getHtmlRestrictions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9372b0078850ef4776b8ce01b232c70e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'removeFilter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '835e029999806baeb12c73344ced2db9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b7c23b65f58a87024125b64873726cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\filter\\Entity',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'filterformatinterface' => 'Drupal\\filter\\FilterFormatInterface',
          'filterplugincollection' => 'Drupal\\filter\\FilterPluginCollection',
          'filterinterface' => 'Drupal\\filter\\Plugin\\FilterInterface',
        ),
         'className' => 'Drupal\\filter\\Entity\\FilterFormat',
         'functionName' => 'calculatePluginDependencies',
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