<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/linkit/src/Entity/Profile.php-1586214306',
   'data' => 
  array (
    '1cff8a4b54704c7c572694df43cc9d97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the linkit profile entity.
 *
 * @ConfigEntityType(
 *   id = "linkit_profile",
 *   label = @Translation("Linkit profile"),
 *   handlers = {
 *     "list_builder" = "Drupal\\linkit\\ProfileListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\linkit\\Form\\Profile\\AddForm",
 *       "edit" = "Drupal\\linkit\\Form\\Profile\\EditForm",
 *       "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
 *     }
 *   },
 *   admin_permission = "administer linkit profiles",
 *   config_prefix = "linkit_profile",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "collection" = "/admin/config/content/linkit",
 *     "edit-form" = "/admin/config/content/linkit/manage/{linkit_profile}",
 *     "delete-form" = "/admin/config/content/linkit/manage/{linkit_profile}/delete"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "matchers"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '493496c3ca2fb930ab895448b9eb2cf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ID of this profile.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad2a454a345e5c558784b1207ddd415b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The human-readable label of this profile.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1e1e5c411b5e12a9eb1a3279022aca4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Description of this profile.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ca5bb30d34d3d67cc7593e1451986566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Configured matchers for this profile.
   *
   * An associative array of matchers assigned to the profile, keyed by the
   * matcher ID of each matcher and using the properties:
   * - id: The plugin ID of the matchers instance.
   * - status: (optional) A Boolean indicating whether the matchers is enabled
   *   in the profile. Defaults to FALSE.
   * - weight: (optional) The weight of the matchers in the profile.
   *   Defaults to 0.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '173dbe2c114542fe66e5583cf0777a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of matchers that are attached to this profile.
   *
   * @var \\Drupal\\linkit\\MatcherCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bc9138041ceba7fd8d1ba0af94c48e7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'getDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae948c052de3b2fb31a088e88f62539d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'setDescription',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7beaf6a13d11b7ac5c83f80d2d31b72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'getMatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6da8521017664633ae73010ba11bc38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'getMatchers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92b76cf98673188201dc6c766e45bf8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'addMatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63412e0bb01955f9bd10bfec83905460' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'removeMatcher',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec6df85eee61656974da6746f11ce0d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'setMatcherConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31f49faa414183068eb632a8fce95824' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\linkit\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'matchercollection' => 'Drupal\\linkit\\MatcherCollection',
          'matcherinterface' => 'Drupal\\linkit\\MatcherInterface',
          'profileinterface' => 'Drupal\\linkit\\ProfileInterface',
        ),
         'className' => 'Drupal\\linkit\\Entity\\Profile',
         'functionName' => 'getPluginCollections',
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