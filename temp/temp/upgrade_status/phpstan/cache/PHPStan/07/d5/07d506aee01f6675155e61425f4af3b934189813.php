<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/fontawesome/fontawesome.module-1593707067',
   'data' => 
  array (
    'b418f9293c44442b129e446a69f93582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_help',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcadef54e9615779a13269b2c668635a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_library_info_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_library_info_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25c5a894f706b9799b9554adc8477b97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Modifies library inclusions to use CDN files when necessary.
 *
 * @param array $libraries
 *   The libraries inclusion array.
 * @param string $librarySuffix
 *   The suffix of the library being modified.
 * @param string $type
 *   The type of library we are modifying.
 * @param string $cdnLocation
 *   The location of the CDN file being used.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => '_fontawesome_modify_library',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a5553a798e71ba7c5c78bb88d86e8275' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Unparses a CDN URL for use with individual Font Awesome file inclusions.
 *
 * @param array $parsed
 *   Array containing URL parsed data.
 *
 * @return string
 *   The unparsed URL for the CDN.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => '_fontawesome_unparse_url',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2eecb325b5331d40fec06a7ab4625cdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ckeditor_css_alter().
 *
 * This function allows for the proper functionality of the icons inside the
 * CKEditor when using Webfonts with CSS as the Font Awesome display method.
 *
 * See fontawesome_editor_js_settings_alter() for allowing the use of the icons
 * inside CKEditor when using the SVG with JS display method.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_ckeditor_css_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '40ac953db387c181ce2d1b1e901462a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Check to make sure that Font Awesome is installed.
 *
 * @return bool
 *   Flag indicating if the library is properly installed.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_check_installed',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5659cc53a16beb4240dabf285e94ce87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_page_attachments().
 *
 * Purposefully only load on page requests and not hook_init(). This is
 * required so it does not increase the bootstrap time of Drupal when it isn\'t
 * necessary.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_page_attachments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71702b0d4752c6c187790900e3917f78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function returns the prefix for an icon based on icon type.
 *
 * @param array $styles
 *   An array of valid styles for the icon.
 * @param string $default
 *   The value to assign here if it\'s not a brand icon.
 *
 * @return string
 *   A valid prefix for this icon.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_determine_prefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8aec19403bee9be64308e8b950cc7448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_theme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0be782f6955a77aa97012ddddaafc840' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme_suggestions_HOOK_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_theme_suggestions_fontawesomeicon',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '442441713c3655fadd8d7e0ce95d1cd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme_registry_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_theme_registry_alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a55472649dffab5d1b4a15cfa765d2f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_icon_providers().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_icon_providers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9819d0c095e063c78b7064e4e4adc155' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_icon_bundle_configure().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_icon_bundle_configure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a0cf9ac0747c18aaea51995555017fc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_preprocess_icon_RENDER_HOOK().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_preprocess_icon_sprite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57519422e721d14832f257163400cbea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_icon_bundles().
 *
 * TODO: this is waiting on an 8.x release of Icon API.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_icon_bundles',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ded57e61903a976943ccd56a164b99a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads the Font Awesome metadata file.
 *
 * @return string
 *   The filepath of the metadata file.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_get_metadata_filepath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0993b33bd15cf45323c2b9aef54da58a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a list of all available Font Awesome icons from metadata.
 *
 * @return array
 *   Array containing icons.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_extract_icons',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49d193198d0318ce355f044aad7d9e48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Extract metadata for a specific icon.
 *
 * @param string $findIcon
 *   The icon for which we want metadata.
 *
 * @return array|bool
 *   Array containing icons.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_extract_icon_metadata',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f5afc7016b4d8097bd9b7f08545de816' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_entity_presave().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_entity_presave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ecfc9c59248b2b5c4bb3c8a6e625b9a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_editor_js_settings_alter().
 *
 * This function allows for the proper functionality of the icons inside the
 * CKEditor when using SVG with JS as the Font Awesome display method. This
 * function also provides for the use of empty tags inside the CKEditor. These
 * tags are normally stripped, which makes the traditional method of using
 * Font Awesome unworkable. Allowing those tags here lets users use the methods
 * of including icons described in all of the Font Awesome guides and docs.
 *
 * See fontawesome_ckeditor_css_alter() for allowing the use of the icons
 * inside CKEditor when using the Webfonts with CSS display method.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'link' => 'Drupal\\Core\\Link',
          'yaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'itemlist' => 'Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList',
        ),
         'className' => NULL,
         'functionName' => 'fontawesome_editor_js_settings_alter',
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