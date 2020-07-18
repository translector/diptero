<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/webform/src/Utility/WebformDialogHelper.php-1594241402',
   'data' => 
  array (
    '7945c13fe645a2be79dbf5db75657946' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper class for modal and off-canvas dialog methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '421116b1781bfa8888b07328e8d1ce0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Width for wide dialog. (modal: 1000px; off-canvas: 800px)
   *
   * Used by: Video only.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9a104878c25cea18db907b5bfdd878b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Width for normal dialog. (modal: 800px; off-canvas: 600px)
   *
   * Used by: Add and edit element/handler, etc…
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe0bf78c4eb107f1c7c5a71d6fd1f02d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Width for narrow dialog. (modal: 700px; off-canvas: 500px)
   *
   * Used by: Duplicate and delete entity, notes, etc…
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a65736f02c17a1f1153dc0190fa8eda4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Use outside-in off-canvas system tray instead of dialogs.
   *
   * @return bool
   *   TRUE if outside_in.module is enabled and system trays are not disabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => 'useOffCanvas',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e6ceb8be3ab6ba8541853aeccc2a791' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attach libraries required by (modal) dialogs.
   *
   * @param array $build
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => 'attachLibraries',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e376481a75beb6b3534b0bb2c34bdec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get modal dialog attributes.
   *
   * @param int|string $width
   *   Width of the modal dialog.
   * @param array $class
   *   Additional class names to be included in the dialog\'s attributes.
   *
   * @return array
   *   Modal dialog attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => 'getModalDialogAttributes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '63fb5e6cedb79d64edc428270b1d2527' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get modal dialog attributes.
   *
   * @param int|string $width
   *   Width of the modal dialog.
   * @param array $class
   *   Additional class names to be included in the dialog\'s attributes.
   *
   * @return array
   *   Modal dialog attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\webform\\Utility',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
        ),
         'className' => 'Drupal\\webform\\Utility\\WebformDialogHelper',
         'functionName' => 'getOffCanvasDialogAttributes',
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