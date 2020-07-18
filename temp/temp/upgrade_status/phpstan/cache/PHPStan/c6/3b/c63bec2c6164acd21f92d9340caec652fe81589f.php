<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/tests/src/FunctionalJavascript/EntityReferenceWidgetTest.php-1588013888,/var/www/html/web/core/tests/Drupal/FunctionalJavascriptTests/SortableTestTrait.php-1594234425',
   'data' => 
  array (
    '21f34ef2c0239d339ddd6cee7afd3f98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the Entity Reference Widget.
 *
 * @group entity_browser
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd58654421d0c513d3ea9b85d22876eb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides functions for simulating sort changes.
 *
 * Selenium uses ChromeDriver for FunctionalJavascript tests, but it does not
 * currently support HTML5 drag and drop. These methods manipulate the DOM.
 * This trait should be deprecated when the Chromium bug is fixed.
 *
 * @see https://www.drupal.org/project/drupal/issues/3078152
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '78e2d00dafff6f3ad34a019363763eed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Define to provide any necessary callback following layout change.
   *
   * @param string $item
   *   The HTML selector for the element to be moved.
   * @param string $from
   *   The HTML selector for the previous container element.
   * @param null|string $to
   *   The HTML selector for the target container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'sortableUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce56e8b08e7b35d0b9cb58888fc13854' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Simulates a drag on an element from one container to another.
   *
   * @param string $item
   *   The HTML selector for the element to be moved.
   * @param string $from
   *   The HTML selector for the previous container element.
   * @param null|string $to
   *   The HTML selector for the target container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'sortableTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8fb2beaa31647a699e7bd9650bedb699' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Simulates a drag moving an element after its sibling in the same container.
   *
   * @param string $item
   *   The HTML selector for the element to be moved.
   * @param string $target
   *   The HTML selector for the sibling element.
   * @param string $from
   *   The HTML selector for the element container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalJavascriptTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'sortableAfter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0cfc34e8a74eb7df50989971b136b34f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d57a4325d1904b56632a9aee1e65383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\RoleInterface $role */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '817a45a799a14073c91c154da777aac5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests Entity Reference widget.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'testEntityReferenceWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80a9158adc7337888cee56dd142078d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'testEntityReferenceWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '387603e318284735c22f0be06e302d36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\entity_browser\\EntityBrowserInterface $browser */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'testEntityReferenceWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bee6f2141d17226b6161b021c6979ff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\RoleInterface $role */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'testEntityReferenceWidget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fc929e6cfd425ac7c7046d2a2a1019b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that drag and drop functions properly.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'testDragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4cea472d92013120e746b4c40716295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'testDragAndDrop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f8cb1accbe2606969e478a6345ccd59f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'entitybrowserelement' => 'Drupal\\entity_browser\\Element\\EntityBrowserElement',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'sortabletesttrait' => 'Drupal\\FunctionalJavascriptTests\\SortableTestTrait',
          'node' => 'Drupal\\node\\Entity\\Node',
          'role' => 'Drupal\\user\\Entity\\Role',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\EntityReferenceWidgetTest',
         'functionName' => 'sortableUpdate',
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