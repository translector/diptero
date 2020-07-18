<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/bg_image_formatter/modules/responsive_bg_image_formatter/src/Plugin/Field/FieldFormatter/ResponsiveBgImageFormatter.php-1585044232',
   'data' => 
  array (
    'b11153c78746dc09406bd8120e8f2455' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class ResponsiveBgImageFormatter.
 *
 * @FieldFormatter(
 *     id="responsive_bg_image_formatter",
 *     label=@Translation("Responsive Background Image"),
 *     field_types={"image"}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'bgimageformatter' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
        ),
         'className' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter\\ResponsiveBgImageFormatter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9aa19437752a51053e1a5f96eae0c638' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'bgimageformatter' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
        ),
         'className' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter\\ResponsiveBgImageFormatter',
         'functionName' => 'settingsForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fbb77724df7d13a33ce994e9addcc6be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'bgimageformatter' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
        ),
         'className' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter\\ResponsiveBgImageFormatter',
         'functionName' => 'settingsSummary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fd3b727e68fad59cbf9c5f1a4eb7718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'bgimageformatter' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
        ),
         'className' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter\\ResponsiveBgImageFormatter',
         'functionName' => 'viewElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8d27d52f5b71a69f82d3503f78ace60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the possible responsive image styles.
   *
   * @param bool $withNone
   *   True to include the \'None\' option, false otherwise.
   *
   * @return array
   *   The select options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'drupal' => 'Drupal',
          'bgimageformatter' => 'Drupal\\bg_image_formatter\\Plugin\\Field\\FieldFormatter\\BgImageFormatter',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'url' => 'Drupal\\Core\\Url',
          'responsiveimagestyle' => 'Drupal\\responsive_image\\Entity\\ResponsiveImageStyle',
        ),
         'className' => 'Drupal\\responsive_bg_image_formatter\\Plugin\\Field\\FieldFormatter\\ResponsiveBgImageFormatter',
         'functionName' => 'getResponsiveImageStyles',
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