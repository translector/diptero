<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/modules/contrib/entity_browser/tests/src/FunctionalJavascript/MultiStepSelectionDisplayTest.php-1588013888',
   'data' => 
  array (
    'd7d12f390ede7970369dfb52de336186' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test for multi_step_display selection display.
 *
 * @group entity_browser
 *
 * @package Drupal\\Tests\\entity_browser\\FunctionalJavascript
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be4a9fb259317d36e5bb6c820931327b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Open iframe entity browser and change scope to iframe.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'openEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2b4c9e8220a2ee61b4cd9549531c0ee9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Close iframe entity browser and change scope to base page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'closeEntityBrowser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '18adf789e10b68e47e2c57115c283655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Click on entity in view to be selected.
   *
   * @param string $entityId
   *   Entity ID that will be selected. Format: "file:1".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'clickViewEntity',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f1a23db9864f74023c8373fa70d880e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wait for Ajax Commands to finish.
   *
   * Since commands are executed in batches, it can occur that one command is
   * still running and new one will be collected for next batch. To ensure all
   * of commands are executed, we have to add additional 200ms wait, before next
   * batch is triggered.
   *
   * It\'s related to: Drupal.entityBrowserCommandQueue.executeCommands
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'waitSelectionDisplayAjaxCommands',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae32f520a04c75f2fd3278f7361a8978' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Change selection mode for article reference field form display widget.
   *
   * @param array $configuration
   *   Configuration that will be used for field form display.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'changeFieldFormDisplayConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c462de1c4eb9866ab5b983e364648a85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'changeFieldFormDisplayConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65e49cfee9d758f1f7a7b55067c5c38b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check that selection state in entity browser Inline Entity Form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Tests\\entity_browser\\FunctionalJavascript\\MultiStepSelectionDisplayTest',
         'functionName' => 'testAjaxCommands',
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